<?php

session_start();
 
unset($_SESSION['kAdi']);
session_destroy();

header('Location:giris.php')
?>