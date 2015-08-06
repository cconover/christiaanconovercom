<?php
/**
 * Register widget areas
 *
 * @package WordPress
 * @subpackage ChristiaanConover
 * @since 1.0.0
 */

if ( ! function_exists( 'christiaanconover_sidebar_widgets' ) ) :
function christiaanconover_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'christiaanconover' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'christiaanconover' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'christiaanconover' ),
	  'description' => __( 'Drag widgets to this footer container', 'christiaanconover' ),
	  'before_widget' => '<article id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'christiaanconover_sidebar_widgets' );
endif;
?>
