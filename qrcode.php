<?php

$monCode = $_GET['code'] ; 

?>

<!DOCTYPE html>

<html>

<head>
<title>Mon super billet à imprimer</title>
</head>

<body>

<h1>Hey ! Voici ton beau billet à imprimer</h1>

<p>Tu as la place numéro... <?= $monCode ; ?></p>

<p>Voici ton QR Code à présenter en caisse</p>

<img src="https://chart.googleapis.com/chart?chs=350x350&cht=qr&chl=localhost/check.php?check=<?= $monCode ; ?>&choe=UTF-8" alt="QRCODE"/>

Le lien que je scanne : <a href="http://localhost/check.php?check=<?= $monCode ; ?>">ICI</a>
</body>


</html>