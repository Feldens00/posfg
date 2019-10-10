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
        $offset = $page * $nposts;
        
        if(isset($page) && isset($posttype) && isset($nposts)){
            
            if($exclude == '0'){

                $args = array(
                'posts_per_page' => $nposts,
                'offset'         => $offset,
                'post_type'       => $posttype
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
                    ob_start(); $thumb=get_the_post_thumbnail_url($selpost->ID, 'thumbnail'); ob_end_clean();
                    $excerpt=get_the_excerpt($selpost->ID);
                    $permalink=get_permalink($selpost->ID);
                    $temparr=Array(
                        'offset' => $offset,
                        "postid"=>$selpost->ID,
                        "title"=>trim($selpost->post_title),
                        "short"=>trim($excerpt),
                        "full"=>'',
                        "link"=>trim($permalink),
                        "featimg"=>$featimg,
                        "thumbimg"=>$thumb);
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