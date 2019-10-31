<?php

    function postList()
    {   
        $wpload = dirname(dirname(dirname(dirname(dirname( __FILE__ ))))) . '/wp-load.php' ;
        require_once($wpload);

        $posttype = $_POST['type'];
        $page = $_POST['page'];
        $nposts = $_POST['nposts'];
        $page = $_POST['page'];
        $exclude = $_POST['exclude'];
        $category = $_POST['category'];;
        $offset = $page * $nposts;
        
        if(isset($page) && isset($posttype) && isset($nposts)){
            
            if($exclude == '0'){ $exclude = ''; }

            if($posttype == 'course' && $category != 0) {

                $args = array(
                'posts_per_page' => $nposts,
                'offset'         => $offset,
                'post_type'      => $posttype,
                'exclude'        => $exclude,
                    'tax_query' => array(
                      array(
                          'taxonomy' => 'category_course', // you can change it according to your taxonomy
                          'field' => 'slug', // this can be 'term_id', 'slug' & 'name'
                          'terms' => $category
                      )
                    )                
                );

            }

            if($posttype == 'news' && $category == 'highlight') {
                $args = array(
                'posts_per_page' => $nposts,
                'offset'         => $offset,
                'post_type'      => $posttype,
                'exclude'        => $exclude,
                    'tax_query' => array(
                      array(
                          'taxonomy' => 'category_news', // you can change it according to your taxonomy
                          'field' => 'slug', // this can be 'term_id', 'slug' & 'name'
                          'terms' => $category
                      )
                    )                
                );

            } else {

                $args = array(
                'posts_per_page' => $nposts,
                'offset'         => $offset,
                'post_type'      => $posttype,
                'exclude'        => $exclude                
                );
            }


            $returnarray=Array();
            $myposts = get_posts($args);

            if ( $myposts ) {
                foreach ( $myposts as $selpost ) {
                    setup_postdata( $selpost );
                    ob_start(); $featimg=get_the_post_thumbnail_url($selpost->ID, 'full'); ob_end_clean();
                    ob_start(); $thumbnail_id = get_post_thumbnail_id( $selpost->ID ); ob_end_clean();
                    ob_start(); $resultalt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); ob_end_clean();
                    ob_start(); $resultthumb=get_the_post_thumbnail_url($selpost->ID, 'thumbnail'); ob_end_clean();
                    $thumb = ($resultthumb != null) ? $resultthumb : get_template_directory_uri().'/src/assets/images/icon-no-image.png';
                    $alt = ($resultalt != null) ? $resultalt : 'Titulo da imagem inexistente';
                    $excerpt=get_the_excerpt($selpost->ID);
                    $permalink=get_permalink($selpost->ID);
                    $temparr=Array(
                        "postid"=>$selpost->ID,
                        "title"=>trim($selpost->post_title),
                        "short"=>trim($excerpt),
                        "full"=>'',
                        "link"=>trim($permalink),
                        "featimg"=>$featimg,
                        "thumbimg"=>$thumb,
                        "thumbalt"=>$alt
                    );
                    array_push($returnarray,$temparr);            
                }
                wp_reset_postdata();
            }

            echo json_encode($returnarray);
            die();
        }
    }
    //Adiciona a funcao extra votos aos hooks ajax do WordPress.
    add_action('wp_ajax_postList', 'postList');
    add_action('wp_ajax_nopriv_postList', 'postList');
?>