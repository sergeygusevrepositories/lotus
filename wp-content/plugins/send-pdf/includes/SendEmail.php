<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class SendEmail {
    public static function send($atts, $flag = false) {

        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->CharSet = 'utf-8';
//        $mail->Host       = get_option('smtp_server');
//        $mail->Host       = 'smtp.gmail.com';
        $mail->Host       = 'mail.adm.tools';
        $mail->SMTPAuth   = true;
//        $mail->Username   = get_option('smtp_user');
//        $mail->Username   = 'mikaelgubin@gmail.com';
        $mail->Username   = 'send@lotuspsychiatric.com';
//        $mail->Password   = get_option('smtp_password');
//        $mail->Password   = 'Od[@|7>j[!{d4gU';
        $mail->Password   = 'p47a&y8%ZJ&S';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->SetFrom("send@lotuspsychiatric.com","Lotus", 0);
        $mail->addAddress('gusev6203@gmail.com', 'Sergey');
        $mail->addAddress('tobeloff@gmail.com');

        $mail->addAttachment(plugin_dir_path(__FILE__) . 'output/' . (str_replace(' ', '_', $atts)) . '.pdf');

        $mail->isHTML(true);
        $mail->Subject = $atts;
        $mail->Body    = $atts;

        if ($mail->send()) {
            if (!$flag) {
                unlink(plugin_dir_path(__FILE__) . 'output/image.png');
            }
            unlink(plugin_dir_path(__FILE__) . 'output/' . (str_replace(' ', '_', $atts)) . '.pdf');
            echo "success";
        }
    }
}