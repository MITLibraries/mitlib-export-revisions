<?php
/**
 * Plugin Name: MITlib Export Revisions
 * Description: A plugin to enable exporting of content revisions
 * Version: 1.0.0
 * Author: MIT Libraries
 * License: GPL2
 *
 * @package MITlib Export Revisions
 * @author MIT Libraries
 */

namespace Mitlib\ExportRevisions;

// Don't call the file directly!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Enable exports of content revisions
 *
 * @param object $args This argument is unused.
 */
function export_revisions( $args ) {
	global $wp_post_types;
	$wp_post_types['revision']->can_export = true;
}
add_action( 'export_wp', 'Mitlib\ExportRevisions\export_revisions' );
