<?php

/**
 * Plugin Name:         WP Human Hide WordPress SEO Columns
 * Description:         Hide WordPress SEO Columns from admin pages. Made by Tang Rufus from WP Human
 * Author:              Tang Rufus @ WP Human
 * Author URI:          http://wphuman.com
 * Author Twitter:      @tangrufus, @wphuman
 * Author Email:        rufus@wphuman.com
 * Version:             1.0.0
 * License:             GPL-2.0+
 * License URI:         http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: 	https://github.com/wphuman/wphuman-hide-wordpress-seo-columns
 * GitHub Branch:       master
 *
 */

// @todo: Add custom post type support

//	Post
add_filter('manage_edit-post_columns', 'wphuman_hide_wordpress_seo_columns');
//	Page
add_filter('manage_edit-page_columns', 'wphuman_hide_wordpress_seo_columns');
//	Media
add_filter('manage_media_columns', 'wphuman_hide_wordpress_seo_columns');

function wphuman_hide_wordpress_seo_columns( $columns ) {

    unset(	$columns['wpseo-score'],
    		$columns['wpseo-title'],
    		$columns['wpseo-metadesc'],
    		$columns['wpseo-focuskw']);

    return $columns;
}
