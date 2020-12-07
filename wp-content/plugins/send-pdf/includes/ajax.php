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

    $html = stripcslashes($_POST['html']);

    $str = preg_replace('#(<button.*?>).*?(</button>)#', '', $html);

    echo CreatePDF::create($str, $_POST['title'], $_POST['flag']);
}



