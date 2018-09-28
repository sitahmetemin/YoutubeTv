<?php
session_start();

if(!isset($_SESSION['kAdi'])){
    header('Location:giris.php');
}

$link = $_POST['link'];

$dosya = fopen('youtube.txt', 'w');
fwrite($dosya, $link);
fclose($dosya);

header('location:index.php');
?>