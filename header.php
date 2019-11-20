<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */


if ( !is_user_logged_in() ) {
   Header( "location:wp-admin/" );
}


?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
		<link href='//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css' rel='stylesheet' type='text/css'>
    	<link href="<?php echo get_template_directory_uri().'/style.css'; ?>" rel='stylesheet' type='text/css'>


		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

<header>
<div class="multilevel-offcanvas off-canvas position-right" id="offCanvasRight" data-off-canvas>
<?php
wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'vertical menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-accordion-menu>%3$s</ul>',
				'theme_location' => 'top-bar-r',
				'depth'          => 3,
				'fallback_cb'    => false,
			)
		);
?>
<?php get_template_part('searchform'); ?>
</div>
<div class="off-canvas-content" data-off-canvas-content>
  <div class="nav-bar">
      <div class="nav-bar-left">
        <?php the_custom_logo(); ?>
      </div>
      <div class="nav-bar-right show-for-medium menu-content">


<?php
wp_nav_menu(
			array(
				'container'      => false,
				'menu_class'     => 'dropdown menu',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" data-dropdown-menu>%3$s</ul>',
				'theme_location' => 'top-bar-r',
				'depth'          => 3,
				'fallback_cb'    => false,
			)
		);
?>  
      <?php get_template_part('searchform'); ?>
      </div>
      <div class="nav-bar-right show-for-small-only">
        <button class="offcanvas-trigger show-for-small-only icon-large" name="button-menu" type="button" data-open="offCanvasRight"   data-hide-for="medium"><i class="fi-list"></i></button>
      </div>
  </div>
</div>
</header>
