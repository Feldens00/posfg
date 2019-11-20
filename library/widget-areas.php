<?php
/**
 * Register widget areas
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_sidebar_widgets' ) ) :
	function foundationpress_sidebar_widgets() {

		//custom widgets
		register_sidebar(
			array(
				'id'            => 'footer-widgets',
				'name'          => __( 'Footer widgets', 'foundationpress' ),
				'description'   => __( 'Drag widgets to this footer container', 'foundationpress' ),
				'before_widget' => '<div id="%1$s" class="cell small-auto medium-auto large-auto widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h5 class="white-text"><strong>',
				'after_title'   => '</strong></h5>',
			)
		);


		//default widgets
		$widgets = array(
            'details-course'    => 'Detalhes - Cursos',
            'newsletter-form'    => 'Newsletter - Form',
            'contact-form'    => 'Contato - Form',
            'sidebar-widgets'    => 'Sidebar - Widgets',
            'subscribe-form'    => 'Inscreva-se - Form',
        );
        foreach ($widgets as $id => $value) {
            $name = is_array($value) ? $value[0] : $value;
            $description = is_array($value) ? $value[1] : '';
            register_sidebar(array(
                'name' => $name,
                'description' => $description,
                'id' => $id,
                'before_widget' => '<div class="%2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h6>',
                'after_title' => '</h6>'
            ));
            
        }
	}

	add_action( 'widgets_init', 'foundationpress_sidebar_widgets' );
endif;