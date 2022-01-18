
<?php require_once ("fonksiyon.php"); ?>
<?php

$sunucu="localhost";
$kadi="root";
$sifre="";
$vt="websitem";
$baglanti = mysqli_connect($sunucu,$kadi,$sifre,$vt);

if(mysqli_connect_errno()) {
    die ("failed to connect to MySQL: " . mysqli_connect_error());
}
?>