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

<?php wp_footer(); ?>

</body>
</html>
