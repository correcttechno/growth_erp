<?php

function generate_password($string){
    return md5(md5($string));
}

function generate_token() {
    $length=40;
    return bin2hex(random_bytes($length));
}