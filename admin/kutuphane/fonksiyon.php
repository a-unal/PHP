<?php session_start();

function dizigor($dizi){
    echo  "<pre>";
    print_r($dizi);
    echo  "</pre>";
}

function yonlendir ($url){
    header("location:{$url}");
    exit();
}

?>