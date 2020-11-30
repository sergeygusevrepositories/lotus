<?php

class SendEmail {
    public static function send($atts) {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host       = get_option('smtp_server');
        $mail->SMTPAuth   = true;
        $mail->Username   = get_option('smtp_user');
        $mail->Password   = get_option('smtp_password');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->SetFrom("from@domain.co","my name", 0);
        $mail->addAddress('gusev6203@gmail.com', 'Joe User');

//    $mail->addAttachment('filename.pdf');

        $mail->isHTML(true);
        $mail->Subject = 'Here is the subject3';
        $mail->Body    = self::parser($atts);
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        if ($mail->send()) {
//        if (unlink('filename.pdf') && unlink('image.png')) {
//            echo 'Message has been sent';
//        }
        }


    }

    public static function parser($atts) {
        return json_decode($atts['data'], true);
    }
}