<?php

function get_img($image_name){
    return base_url()."assets/images/".$image_name;
}

function get_css($filename){
    return base_url()."assets/css/".$filename."?ver=4.0";
}

function get_js($filename){
    return base_url()."assets/js/".$filename."?ver=4.0";
}


?>