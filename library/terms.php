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

    // Termos de cursos
    array(
      'name' => 'Administração',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'administracao',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Ambiental e Rural',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'ambiental-e-rural',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Arquitetura',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'arquitetura',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Biomedicina',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'biomedicina',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Direito',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'direito',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Educação',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'educacao',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Enfermagem',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'enfermagem',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Engenharia',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'engenharia',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Estética',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'estetica',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Farmácia',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'farmacia',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Fisioterapia',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'fisioterapia',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Medicina',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'medicina',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Multidisciplinar',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'multidisciplinar',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Nutrição',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'nutricao',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Odontologia',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'odontologia',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Psicologia',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'psicologia',
      'taxonomy' => 'category_course' 
    ),
    array(
      'name' => 'Tecnologia da Informação',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'tecnologia-da-informacao',
      'taxonomy' => 'category_course' 
    ),
     array(
      'name' => 'Veterinária',
      'description' => 'Não altere o slug deste termo',
      'slug' => 'veterinaria',
      'taxonomy' => 'category_course' 
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