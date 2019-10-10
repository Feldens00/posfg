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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo get_template_directory_uri().'/style.css?ver='.microtime(); ?>" rel='stylesheet' type='text/css'>
    <!-- <script type="text/javascript" src="<?php echo get_template_directory_uri().'/src/assets/js/util.js'; ?>"></script> -->


		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>






<style>
.custom-logo{
	height: 65px;
	width: auto;
}
.nav-bar {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-justify-content: space-between;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  background: white;
  height: 80px;
  padding-right: 20px;
}

.nav-bar .nav-bar-left {
  padding: 1.8rem;
}

.nav-bar li {
  list-style: none;
  text-transform: uppercase;
}

.nav-bar a {
  color: #0083C4;
  transition: color 0.2s ease-in;
}

.nav-bar a:hover {
  color: #a8b8c3;
}

@media screen and (max-width: 39.9375em) {
  .nav-bar {
    /*height: 53.57143px;*/
  }
}

.nav-bar .offcanvas-trigger {
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-align-items: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-justify-content: center;
      -ms-flex-pack: center;
          justify-content: center;
  padding: 1.6rem;
  color: #fefefe;
  text-transform: uppercase;
  background-color: #566d7c;
  transition: background-color 0.2s ease-in;
  cursor: pointer;
}

.nav-bar .offcanvas-trigger .offcanvas-trigger-text {
  margin-right: 0.25rem;
  margin-top: 0.25rem;
}

.nav-bar .offcanvas-trigger:hover {
  background-color: #6b879a;
}

@media screen and (max-width: 39.9375em) {
  .nav-bar .offcanvas-trigger {
    padding: 0.9rem;
  }
}

.multilevel-offcanvas {
  background: #222b31;
  padding: 20px;
  color: #fefefe;
}

.multilevel-offcanvas > .menu {
  margin-bottom: 1rem;
}

.multilevel-offcanvas .menu a {
  color: rgba(254, 254, 254, 0.6);
  padding-top: 7px;
  padding-bottom: 7px;
  transition: color 0.2s ease-in;
}

.multilevel-offcanvas .menu a:hover {
  color: #fefefe;
}

.multilevel-offcanvas .fa {
  color: #fefefe;
}

.multilevel-offcanvas .is-accordion-submenu-parent > a::after {
  border-color: rgba(254, 254, 254, 0.6) transparent transparent;
}

.off-canvas-content .social-links {
  margin-left: 20px;
}

.off-canvas-content .social-links li {
  margin-right: 5px;
}

.off-canvas-content .social-links a:hover .fa {
  color: #bebebe;
  transition: color .2s ease-in;
}

.off-canvas-content .social-links .fa {
  font-size: 2.2rem;
}

.is-open + .off-canvas-content .hamburger .line:nth-child(1),
.is-open + .off-canvas-content .hamburger .line:nth-child(3) {
  width: 12px;
}

.is-open + .off-canvas-content .hamburger .line:nth-child(1) {
  -webkit-transform: translateX(-5px) rotate(-45deg);
      -ms-transform: translateX(-5px) rotate(-45deg);
          transform: translateX(-5px) rotate(-45deg);
}

.is-open + .off-canvas-content .hamburger .line:nth-child(3) {
  -webkit-transform: translateX(-5px) rotate(45deg);
      -ms-transform: translateX(-5px) rotate(45deg);
          transform: translateX(-5px) rotate(45deg);
}

.icon-large i{
  font-size: 1.5rem;
}

/*
inserir no canvas right 
ul -> Classe :vertical menu e data-accordion-menu
ul social menu -> classe:; menu simple social-links
*/

.padding-footer{
  padding:20px;
  background-color: #0E6EAE;
}
</style>
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
        <button class="offcanvas-trigger show-for-small-only icon-large" type="button" data-open="offCanvasRight"   data-hide-for="medium"><i class="fi-list"></i></button>
      </div>
  </div>
</div>
</header>
