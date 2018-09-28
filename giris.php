<?php
session_start();
unset($_SESSION['kAdi']);
session_destroy();
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <style>
        .ortala{
            width: 720px;
            position: relative;
            left: 50%;
            margin-left: -160px;
        }
        .cikisButton {
            float: right;
        }
        body{
            background-image: url('bg.png');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center; 
        }
    </style>

</head>
<body>
    <div class="ortala">
        <form action="girisKontrol.php" method="post">
            <label for="">Kullanıcı Adı:</label>:<input name="KAdi" type="text"><br>
            <label for="">Şifre</label>: <input name="KSifre" type="text"><br>
            <input type="submit" value="Giriş Yap">
        </form>
    </div>
</body>
</html>