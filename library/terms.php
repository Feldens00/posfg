<?php
//  Insercao de termos pré definidos
function register_terms(){
  
  $terms = array (
    // Termos de noticias
    array(
      'name' => 'Destaque',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'highlight',
      'taxonomy' => 'category_news' 
    ),
    array(
      'name' => 'Banner',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'banner',
      'taxonomy' => 'category_news' 
    ),
  );

  // Gera termos em review ao cadastrar novo curso
   $args = array(
   'post_type'   => 'course'
   );
   $posts = get_posts($args);
   foreach ($posts as $course) {
     $terms[] = array(
         'name' =>  $course->post_title,
         'description' => 'Não altere o slug deste termo',
         'slug' => $course->post_name,
         'taxonomy' => 'category_review' 
     );
   }


  foreach ($terms as $row) {
    if( !term_exists( $row['slug'], $row['taxonomy'])) {
    $retorno = wp_insert_term(
        $row['name'],
        $row['taxonomy'],
        array(
          'description' => $row['description'],
          'slug'        =>  $row['slug']
        )
      );   
    }
  } 
}
add_action('init', 'register_terms'); 