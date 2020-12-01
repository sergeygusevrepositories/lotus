<?php

class CreateSignature {
    public static function create($img) {
        list($type, $img) = explode(';', $img);
        list(, $img)      = explode(',', $img);
        $img = base64_decode($img);
        if (file_put_contents('output/image.png', $img)) {
            return "success";
        }
    }
}