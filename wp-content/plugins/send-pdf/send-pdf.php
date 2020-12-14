<?php
/*
 Plugin Name: Send PDF
 Description: plugin
 Author: Sergey
 */

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

wp_enqueue_style( 'send-pdf-css-main', plugin_dir_url( __FILE__ ) . 'css/style.css', array(), 4, 'all' );
wp_enqueue_style( 'signature-pad-css', plugin_dir_url( __FILE__ ) . 'css/signature-pad.css', array(), 4, 'all' );

wp_deregister_script('jquery');
wp_enqueue_script('jquery','//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js','','',true);

wp_enqueue_script( 'signature-pad', plugin_dir_url( __FILE__ ) . 'js/signature_pad.umd.js', array( 'jquery' ), 4, true );
wp_enqueue_script( 'signature-app', plugin_dir_url( __FILE__ ) . 'js/app.js', array( 'jquery' ), 4, true );
wp_enqueue_script( 'send-pdf-js-main', plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery' ), 4, true );

add_shortcode('plugin_shortcode','shortcode_output');

function shortcode_output($atts, $content = '', $tag){

}