<?php
/**
 * Blue Blaze Favicons
 *
 * @author  Blue Blaze Associates
 * @license GPL-2.0+
 * @link    https://github.com/blueblazeassociates/blueblaze--favicons
 */

/**
 * Plugin Name:       Blue Blaze Favicons
 * Plugin URI:        https://github.com/blueblazeassociates/blueblaze--favicons
 * Description:       Injects Blue Blaze favicons into the HTML head via the wp_head action.
 * Version:           0.0.1
 * Author:            Blue Blaze Associates
 * Author URI:        http://www.blueblazeassociates.com
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: https://github.com/blueblazeassociates/blueblaze--favicons
 * Requires WP:       4.5
 * Requires PHP:      5.6
 */

/**
 * Adds custom favicons to the HTML <head>.
 *
 * @since Blue Blaze Favicons 0.0.1
 */
function blueblaze__favicons() {
  $base_uri = plugins_url( '', __FILE__ );

  $output = <<<HTML
<link rel="apple-touch-icon" sizes="180x180" href="$base_uri/assets/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="$base_uri/assets/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="$base_uri/assets/favicons/favicon-194x194.png" sizes="194x194">
<link rel="icon" type="image/png" href="$base_uri/assets/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="$base_uri/assets/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="$base_uri/assets/favicons/manifest.json">
<link rel="mask-icon" href="$base_uri/assets/favicons/safari-pinned-tab.svg" color="#2f69b3">
<link rel="shortcut icon" href="$base_uri/assets/favicons/favicon.ico">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="$base_uri/assets/favicons/mstile-144x144.png">
<meta name="msapplication-config" content="$base_uri/assets/favicons/browserconfig.xml">
<meta name="theme-color" content="#ffffff">
HTML;

  print $output;
}
add_action( 'wp_head', 'blueblaze__favicons' );