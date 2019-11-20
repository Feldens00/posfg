<?php
/**
 * The template for displaying the footer
 * 
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<?php get_template_part('components/modal-chat');?>

<footer class="padding-footer" id="footer">
   <div class="grid-x grid-margin-x">
      <div class="cell small-12">
         <div class="grid-container">
            <div class="grid-x grid-margin-x">
            	<?php dynamic_sidebar( 'footer-widgets' ); ?>
            </div>
         </div>
      </div>    
   </div>
</footer>



<?php /* if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; */ ?>

<!-- For click-desk -->
<?php
$post_type = get_post_type();  
// get post type taxonomies  
$taxonomies = get_object_taxonomies($post_type);
if( !empty( $taxonomies ) ){
   $out = '';  
   foreach ($taxonomies as $taxonomy) {           
      // get the terms related to post  
      $terms = get_the_terms( $post->ID, $taxonomy ); 

      if ( !empty( $terms ) ) {  
         foreach ( $terms as $term )  
            $out .= 'category-' . strtolower ($term->slug) . ' ';  
      }  
   }  
} else {
   $out = ' ';
}
?>
<script>
   var classes_post = '<?php echo $out; ?>';
</script>

<?php wp_footer(); ?>

</body>
</html>
