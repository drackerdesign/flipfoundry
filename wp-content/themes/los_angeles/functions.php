<?php

/* 
	MR Semantic Framework
	Version: 1.2.4
	Last Modified: 10th September 2009
	Optimised for: Wordpress 2.9
*/

/* Widgets */
include('functions/widgets.php');

/* Easy Custom Field */
include('functions/custom-field.php');

/* Comments */
include('functions/comments.php');

/* Site Menu */
include('functions/menu.php');

/* HTML or XHTML */
include('functions/doctype.php');

/* Remove WP Auto Formatting */
include('functions/formatting.php');

/* Breadcrumbs */
include('functions/breadcrumb-trail.php');

/* Page Title */
include('functions/page-title.php');

/* Page Order */
include('functions/page-order.php');

/* Control Panel */
include('functions/theme-panel.php');

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	    add_theme_support( 'post-thumbnails' );
	    set_post_thumbnail_size( 196, 196, true ); // Normal post thumbnails
	}
	
function related_posts_shortcode( $atts ) {
	extract(shortcode_atts(array(
	    'limit' => '5',
	), $atts));

	global $wpdb, $post, $table_prefix;

	if ($post->ID) {
		$retval = '<h3>Related Posts:</h3> <ul>';
 		// Get tags
		$tags = wp_get_post_tags($post->ID);
		$tagsarray = array();
		foreach ($tags as $tag) {
			$tagsarray[] = $tag->term_id;
		}
		$tagslist = implode(',', $tagsarray);

		// Do the query
		$q = "SELECT p.*, count(tr.object_id) as count
			FROM $wpdb->term_taxonomy AS tt, $wpdb->term_relationships AS tr, $wpdb->posts AS p WHERE tt.taxonomy ='post_tag' AND tt.term_taxonomy_id = tr.term_taxonomy_id AND tr.object_id  = p.ID AND tt.term_id IN ($tagslist) AND p.ID != $post->ID
				AND p.post_status = 'publish'
				AND p.post_date_gmt < NOW()
 			GROUP BY tr.object_id
			ORDER BY count DESC, p.post_date_gmt DESC
			LIMIT $limit;";

		$related = $wpdb->get_results($q);
 		if ( $related ) {
			foreach($related as $r) {
				$retval .= '<li><a title="'.wptexturize($r->post_title).'" href="'.get_permalink($r->ID).'">'.wptexturize($r->post_title).'</a></li>';
			}
		} else {
			$retval .= '
	<li>No related posts found</li>';
		}
		$retval .= '</ul>';
		return $retval;
	}
	return;
}
add_shortcode('related_posts', 'related_posts_shortcode');

?>