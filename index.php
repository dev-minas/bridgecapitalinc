<?php

if (!in_array($_SERVER['REMOTE_ADDR'], array('::1','127.0.0.1','178.160.159.181','178.160.128.82','46.71.75.60','71.80.180.230'))) {
    include "home.html";
    exit();
}

/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );
