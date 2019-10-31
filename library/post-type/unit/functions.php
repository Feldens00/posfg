<?php
/*------------------------------------*\
    Functions
\*------------------------------------*/
// Adiciona categoria no post type course
function cwp_register_taxonomy_unit(){
    register_taxonomy(
        'category_unit',
        'unit',
        array(
            'label' => __('Categorias'),
            'rewrite' => array('slug' => 'category_unit'),
            'hierarchical' => true,
            'show_in_rest'      => true,
            // Mostra o tipo de categoria de cada post
            'show_admin_column' => true
        )
    );
}
// Adiciona o filtro select de categoria na listagem de post unit
function my_restrict_manage_unit() {
    global $typenow;
    $taxonomy = 'category_unit';
    if( $typenow != "page" && $typenow != "post" && $typenow == 'unit' ){
        $filters = array($taxonomy);
        foreach ($filters as $tax_slug) {
            $tax_obj = get_taxonomy($tax_slug);
            $tax_name = $tax_obj->labels->name;
            $terms = get_terms($tax_slug);
            echo "<select name='$tax_slug' id='$tax_slug' class='postform'>";
            echo "<option value=''>$tax_name</option>";
            foreach ($terms as $term) { echo '<option value='. $term->slug, $_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . __($term->name, 'tecnosinos') .' (' . $term->count .')</option>'; }
            echo "</select>";
        }
    }
}
/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/
// Add actions
add_action('init', 'cwp_register_taxonomy_unit');
add_action( 'restrict_manage_posts', 'my_restrict_manage_unit' );