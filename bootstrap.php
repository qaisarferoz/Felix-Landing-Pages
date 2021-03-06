<?php
/*
 * Plugin Name: Felix Landing Pages
 * Description: Build your professional marketing Landing Page or Flyer in minutes. Easy to use page builder with WordPress Customizer
 * Version: 1.0.0
 * Author: Smartcat
 * Author URI: https://smartcatdesign.net
 * License: GPL v2
 * Text Domain: felix-landing-pages 
 * Domain Path: /languages 
 * 
 * @author          Bilal Hassan    <bilal@smartcat.ca>
 * @author          Zack Mitchell   <zack@smartcat.ca>
 * @author          Eric Green      <eric@smartcat.ca>
 * @date            July 20, 2016
 * @copyright       Smartcat Design <https://smartcatdesign.net/
 * 
 */

// Die if accessed directly
if( !defined( 'ABSPATH' ) ) :
    die( "Error: Unable to access URL directly." );
endif;

// Plugin defines
if( !defined( 'FELIX_LAND_VER' ) ) :
    define( 'FELIX_LAND_VER', '0.9.0' );
endif;

if( !defined( 'FELIX_LAND_URL' ) ) :
    define( 'FELIX_LAND_URL', plugin_dir_url( __FILE__ ) );
endif;

if( !defined( 'FELIX_LAND_PATH' ) ) :
    define( 'FELIX_LAND_PATH',  plugin_dir_path( __FILE__ ) );
endif;

if( !defined( 'FELIX_LAND_CONF' ) ) :
    define( 'FELIX_LAND_CONF',  FELIX_LAND_PATH . 'inc/config/' );
endif;


// Bootstrap the plugin
require 'autoload.php';
require 'inc/functions.php';
Felix_LandPlugin::instance()->run();


function felix_do_activation() {
    Felix_LandPlugin::instance()->activate();
}
register_activation_hook( __FILE__, 'felix_do_activation' );

function felix_do_deactivation() {
    Felix_LandPlugin::instance()->deactivate();    
}
register_deactivation_hook( __FILE__, 'felix_do_deactivation' );


