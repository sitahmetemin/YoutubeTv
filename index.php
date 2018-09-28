<?php
session_start();

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aksaray Belediye TV</title>
</head>
<body>
<?php
$dosya = fopen('youtube.txt', 'r');
$icerik = fread($dosya, filesize('youtube.txt'));
fclose($dosya);
?>
<iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $icerik ?>?autoplay=1&amp;controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="position:fixed; top:0px; left:0px; bottom:0px; right:0px; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;"></iframe>

</body>
</html>