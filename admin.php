<?php
session_start();

if(!isset($_SESSION['kAdi'])){
    header('Location:giris.php');
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <style>
        .ortala{
            width: 400px;
            position: relative;
            left: 50%;
            margin-left: -160px;
            padding-top:100px;
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
    <div class="cikisButton">
        <a href="cikisYap.php">Çıkış Yap</a>
    </div>
    <div class="ortala">
        <form action="linkDegistir.php" method="POST">
            <label for="">Youtube Linki</label>:
            <input name="link" type="text"><br><br><br>
            <input type="submit" value="Kaydet">
        </form>
    </div>

    
    
</body>
</html>