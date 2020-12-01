<?php

class CreatePDF {
    public static function create($html) {
        $mpdf = new \Mpdf\Mpdf();
        $stylesheet = file_get_contents(get_template_directory_uri() . '/css/styles.css');
        $stylesheet .= file_get_contents(plugin_dir_url( __DIR__ ) . 'css/output.css');
        $mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);
        $mpdf->Output(plugin_dir_path(__FILE__) . 'output/output.pdf', \Mpdf\Output\Destination::FILE);
    }
}