<?php
session_start();

$kAdi =$_POST['KAdi'];
$kSifre = $_POST['KSifre'];

if(!isset($_SESSION['kAdi'])){
    if($kAdi =='ahmeteminsit' && $kSifre == '123456'){
        $_SESSION['kAdi'] = $kAdi;
        header ("Location:admin.php"); 
    }else {
        header ("Location:giris.php");
    }
}else {
    header ("Location:admin.php"); 
}