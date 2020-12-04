<?php

class CreatePDF {
    public static function create($html, $atts, $flag) {
        $defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $mpdf = new \Mpdf\Mpdf(
            [
                'fontdata' => $fontData + [
                        'frutiger' => [
                            'R' => 'RobotoMono-Regular.ttf',
                            'I' => 'RobotoMono-Regular.ttf',
                        ]
                    ],
                'default_font' => 'frutiger'
            ]
        );
        $stylesheet = file_get_contents(get_template_directory_uri() . '/css/styles.css');
        $stylesheet .= file_get_contents(plugin_dir_url( __DIR__ ) . 'css/output.css');
        $mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);
        $mpdf->Output(plugin_dir_path(__FILE__) . 'output/output.pdf', \Mpdf\Output\Destination::FILE);
        if (file_exists(plugin_dir_path(__FILE__) . 'output/output.pdf')) {
            require_once plugin_dir_path(__DIR__) . 'includes/SendEmail.php';

            echo SendEmail::send($atts, $flag);
        }
    }
}