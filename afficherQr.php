<?php
include("connexion.php");
?>
<?php
        if (isset ($_POST['valider'])){
            $nom=$_POST['nom'];
        
            try {
                $dbh = new PDO('mysql:host=localhost;dbname=zoo','root', '');
            }
            catch(PDOException $e){
                printf("Échec de la connexion : %s\n", $e->getMessage());
                exit();
            }

        
            $sql = "INSERT INTO achats (nom, scan) VALUES (?,?)";
            $scan = FALSE;
            $dbh->prepare($sql)->execute([$nom, $scan]);
            $stmt = $zoo->query(" SELECT max(idTicket) as Max FROM achats ");
            $monCode = $stmt->fetch();
        }
        ?>


        <h1>Hey ! Voici ton beau billet à imprimer</h1>

        <p>Tu as le numéro... <?= $monCode['Max'] ; ?></p>

        <p>Voici ton QR Code à présenter en caisse</p>

        <img src="https://chart.googleapis.com/chart?chs=350x350&cht=qr&chl=localhost/check.php?check=<?= $monCode['Max'] ; ?>&choe=UTF-8" alt="QRCODE"/>