<?php
/*
 Plugin Name: Send PDF
 Description: plugin
 Author: Sergey
 */

require_once(plugin_dir_path(__FILE__) . 'libs/fpdf.php');
require_once(plugin_dir_path(__FILE__) . 'libs/PHPMailer.php');
require_once(plugin_dir_path(__FILE__) . 'libs/SMTP.php');
require_once plugin_dir_path(__FILE__) . 'includes/sgus-functions.php';
require_once plugin_dir_path(__FILE__) . 'includes/SendEmail.php';
require_once plugin_dir_path(__FILE__) . 'includes/CreatePDF.php';
require_once plugin_dir_path(__FILE__) . '/vendor/autoload.php';

wp_enqueue_style( 'send-pdf-css-main', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), 1, 'all' );
wp_enqueue_script( 'send-pdf-js-main', plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery' ), 1, true );



add_shortcode('plugin_shortcode','shortcode_output');

function shortcode_output($atts, $content = '', $tag){






//    SendEmail::send($atts);

//    CreatePDF::create();
}