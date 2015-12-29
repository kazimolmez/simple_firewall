<?php

/*!
 * simple_firewall
 * http://kazimolmez.com
 * Version 1.0
 *
 * Copyright 2015, Kazım Ölmez
 * Released under the GNU General license
 */
 
if(isset($_GET)){
    foreach ($_GET as $ter => $art) {
        if(gettype($art)==='integer'){
            $_GET[$ter] = intval($art);
        }else{
            $_GET[$ter] = mysql_escape_string($art);
        }
    }
}

if(isset($_POST)){
    foreach ($_POST as $ter => $art) {
        if(gettype($art)==='integer'){
            $_POST[$ter] = intval($art);
        }else{
            $_POST[$ter] = mysql_escape_string($art);
        }
    }
}

if(isset($_SERVER['HTTP_REFERER'])){
    $http_referer = $_SERVER['HTTP_REFERER'];
    $http_host = $_SERVER['SERVER_NAME'];
    if(!strstr($http_referer,$http_host)){
        exit('illegal attack!');
    }
}
?>
