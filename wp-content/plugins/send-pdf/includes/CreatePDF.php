<?php

class CreatePDF {
    public static function create($html, $data) {

        if ($data['id'] == 2) {
            $html = str_replace("<input type=\"date\" id=\"date2\" class=\"forma_input\" required=\"\">", "<input type=\"text\" id=\"date2\" class=\"forma_input\" required=\"\" value='" . $data['date'] . "'>", $html);

            $html = str_replace("<input id=\"printed_name\" type=\"text\" class=\"forma_input\" required=\"\" style=\"position: relative;top: -8px;\">", "<input id=\"printed_name\" type=\"text\" class=\"forma_input\" required=\"\" style=\"position: relative;top: -8px;\" value='" . $data['printedName'] . "'>", $html);

            if ($data['parentChkb'] == 'false')
                $html = str_replace("<label class=\"forma_check forma_check2\"><input id=\"parent-chkb\" type=\"checkbox\"><div class=\"forma_check--p\">Parent or guardian of unemancipated minor</div></label>", "", $html);

            if ($data['executorChkb'] == 'false')
                $html = str_replace("<label class=\"forma_check forma_check2\"><input id=\"executor-chkb\" type=\"checkbox\"><div class=\"forma_check--p\">Executor or administrator of decedent's estate</div></label>", "", $html);

            if ($data['courtChkb'] == 'false')
                $html = str_replace("<label class=\"forma_check forma_check2\"><input id=\"court-chkb\" type=\"checkbox\"><div class=\"forma_check--p\">Court appointed guardian</div></label>", "", $html);

            if ($data['powerChkb'] == 'false')
                $html = str_replace("<label class=\"forma_check forma_check2\"><input id=\"power-chkb\" type=\"checkbox\"><div class=\"forma_check--p\">Power of Attorney</div></label>", "", $html);
        }

        echo "<pre>";
        print_r($html);
        print_r($data);

        $mpdf = new \Mpdf\Mpdf();
        $stylesheet = file_get_contents(get_template_directory_uri() . '/css/styles.css');
        $stylesheet .= file_get_contents(plugin_dir_url( __DIR__ ) . 'css/output.css');
        $mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
        $mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);
        $mpdf->Output(plugin_dir_path(__FILE__) . 'output/output.pdf', \Mpdf\Output\Destination::FILE);
    }
}