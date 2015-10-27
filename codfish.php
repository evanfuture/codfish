<?php
/*
Plugin Name: Codfish
Plugin URI: https://github.com/evanfuture/codfish
Description: Testing this.
Version: 1.0
Author: Evan Payne
Author URI: http://evanpayne.com
License: GPLv2 or later
Text Domain: codfish
Domain Path: /lang/
*/



require_once dirname( __FILE__ ) . '/vendor/extended-cpts/extended-cpts.php';
register_extended_post_type( 'codfish-resume' );

require_once dirname( __FILE__ ) . '/lib/fields.php';
//require_once dirname( __FILE__ ) . 'lib/shortcode.php';
?>