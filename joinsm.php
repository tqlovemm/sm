<?php
header("HTTP/1.1 303 See Other");
require_once "mobile.php";
if(Mobile::is_mobile_request()){
    $url = "http://smximeng.com/forum.php?mod=photo&mobile=2";
    header("Location: $url");
    exit;
}else{
    $url = "http://smximeng.com/contact.php";
    header("Location: $url");
    exit;
}