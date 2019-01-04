<?php
/**
 * Plugin Name: WpIndico
 * Plugin URI: https://github.com/the16thpythonist/wp-scopus-plugin
 * Description: Wordpress Indico event management
 * Author: Jonas Teufel
 * Version: 0.0.0.0
 * Author URI: google.com
 * License: GPLv2 or later
 */

namespace WpIndico;

require_once __DIR__ . '/vendor/autoload.php';

use the16thpythonist\Wordpress\Indico\EventPost;

EventPost::register('event');

