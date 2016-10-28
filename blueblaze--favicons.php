<?php
/**
 * Blue Blaze Favicons
 *
 * @author  Blue Blaze Associates
 * @license GPL-2.0+
 * @link    https://github.com/blueblazeassociates/blueblaze-favicons
 */

/*
 * Plugin Name:       Blue Blaze Favicons
 * Plugin URI:        https://github.com/blueblazeassociates/blueblaze-favicons
 * Description:       Injects Blue Blaze favicons into the HTML head via the wp_head action.
 * Version:           0.0.1
 * Author:            Blue Blaze Associates
 * Author URI:        http://www.blueblazeassociates.com
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/blueblazeassociates/blueblaze-favicons
 * GitHub Branch:     master
 * Requires WP:       4.5
 * Requires PHP:      5.6
 *
 * Favicons, logos, etc are not licensed under GPL.  Traditional copyright and ownership applies.
 */

/**
 * Adds custom favicons to the HTML <head>.
 *
 * @since Blue Blaze Favicons 0.0.1
 */
function blueblaze__favicons() {
  $base_uri = plugins_url( '', __FILE__ );

  $output = <<<HTML
<link rel="apple-touch-icon" sizes="180x180" href="$base_uri/assets/favicons/apple-touch-icon.png?v=wAvrq8rOyQ">
<link rel="icon" type="image/png" href="$base_uri/assets/favicons/favicon-32x32.png?v=wAvrq8rOyQ" sizes="32x32">
<link rel="icon" type="image/png" href="$base_uri/assets/favicons/favicon-16x16.png?v=wAvrq8rOyQ" sizes="16x16">
<link rel="manifest" href="$base_uri/assets/favicons/manifest.json?v=wAvrq8rOyQ">
<link rel="mask-icon" href="$base_uri/assets/favicons/safari-pinned-tab.svg?v=wAvrq8rOyQ" color="#2e67b2">
<link rel="shortcut icon" href="$base_uri/assets/favicons/favicon.ico?v=wAvrq8rOyQ">
<meta name="msapplication-config" content="$base_uri/assets/favicons/browserconfig.xml?v=wAvrq8rOyQ">
<meta name="theme-color" content="#ffffff">
HTML;

  print $output;
}
add_action( 'wp_head',    'blueblaze__favicons' );
add_action( 'admin_head', 'blueblaze__favicons' );
