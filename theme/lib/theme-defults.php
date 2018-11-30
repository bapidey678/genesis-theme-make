<?php

add_filter( 'genesis_theme_settings_defaults', '' );
/**
 * Updates theme settings on reset.
 *
 * @since
 *
 * @param array $defaults Original theme settings defaults.
 * @return array Modified defaults.
 */
function your_custom_function( $defaults ) {
	$defaults['blog_cat_num']              = ;
	$defaults['content_archive']           = '';
	$defaults['content_archive_limit']     = ;
	$defaults['content_archive_thumbnail'] = ;
	$defaults['posts_nav']                 = '';
	$defaults['site_layout']               = '';
	return $defaults;
}

add_action( 'after_switch_theme', '' );
/**
 * Updates theme settings on activation.
 *
 * @since 2.2.3
 */
function your_custom_theme() {
	if ( function_exists( 'genesis_update_settings' ) ) {
		genesis_update_settings(
			array(
				'blog_cat_num'              => ,
				'content_archive'           => '',
				'content_archive_limit'     => ,
				'content_archive_thumbnail' => ,
				'posts_nav'                 => '',
				'site_layout'               => '',
			)
		);
	}

	update_option( 'posts_per_page', 6 );
}


// You can also add some outher defult setting here.
