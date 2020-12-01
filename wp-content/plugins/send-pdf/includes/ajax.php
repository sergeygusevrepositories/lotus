<?php

require_once('../../../../wp-load.php');
require_once('../../../../wp-config.php');
require_once('../../../../wp-includes/load.php');

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ($_POST["action"] == "createImgFromCanvas") {
    require_once plugin_dir_path(__DIR__) . 'includes/CreateSignature.php';

    echo CreateSignature::create($_POST["signature"]);
} else {
    require_once plugin_dir_path(__DIR__) . 'includes/CreatePDF.php';
    require_once plugin_dir_path(__DIR__) . '/vendor/autoload.php';

    CreatePDF::create(stripcslashes($_POST['html']));
}



