<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
Plugin Name:  Plus Post - Posts Relacionados
Plugin URI:   https://brasilwebsolutions.com.br/plugins/plus-post/
Description:  Plugin para criar automaticamente links relacionados nos posts.
Version:      1.0.0
Author:       Fernando Britto
Author URI:   http://www.fernandobritto.com.br/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  wporg
Domain Path:  /languages
*/


class options_page {

	 function __construct() {
		 add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	 }

	 function admin_menu() {
		 add_options_page(
			 'Plus Post',
			 'Plus Post',
			 'manage_options',
			 'options_page_slug',
			 array(
				 $this,
				 'settings_page'
			 )
		 );
	 }

	 function settings_page() {
		 echo 'Plus Post da Brasil Web Solutions';
	 }
 }

 new options_page;





function pluspost_function( $atts ){
	
	$related_args = array(
		'post_type' => 'post',
		'post_not_in' => array( get_the_ID() ),
		'posts_per_page' => -1,

	);

	$posts = new WP_Query($related_args);

	if( $posts->have_posts() ){
		$html = '<ul>';

		while ( $posts->have_posts() )
		{
			$posts->the_post();
			$html.= '<li><a href="'.get_the_permalink().'">'.get_the_title().'</a></li>';
		}

		wp_reset_postdata();

		$html.= '</ul>';

	}

	return $html;
}
add_shortcode( 'pluspost', 'pluspost_function' );
