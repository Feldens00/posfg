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

    // Termos de unidades
    array(
     'name' => 'AC',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'ac',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'AL',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'al',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'AP',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'ap',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'AM',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'am',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'BA',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'ba',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'CE',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'ce',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'DF',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'df',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'ES',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'es',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'GO',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'go',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'MA',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'ma',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'MT',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'mt',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'MS',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'ms',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'MG',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'mg',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'PA',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'PA',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'PB',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'pb',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'PR',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'pr',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'PE',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'pe',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'PI',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'pi',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'RJ',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'rj',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'RN',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'rn',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'RS',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'rs',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'RO',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'ro',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'RR',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'rr',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'SC',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'sc',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'SP',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'sp',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'SE',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'se',
     'taxonomy' => 'category_unit' 
    ),
    array(
     'name' => 'TO',
     'description' => 'Não altere o slug deste termo',
     'slug' => 'to',
     'taxonomy' => 'category_unit' 
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