<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<!-- <?php get_template_part( 'template-parts/featured-image' ); ?>
 --><div class="main main-container-fluid">
	
	<?php 
	    $lists = array('course','news','unit');
	    if (in_array(get_post_type(), $lists)) {
	        get_template_part('singles/' . get_post_type());
	    } else {
	        get_template_part('singles/default');
	    }
    ?>
</div>
<?php get_footer();?>
