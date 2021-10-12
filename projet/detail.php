<?php
  $data = require_once("donnee.php");
  $id=$_GET['id'];
  $connexion = $conn->prepare("SELECT * FROM personnages WHERE id_per = $id");
  $connexion->execute();
  $other = $connexion->fetch();
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="detail.css">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="image">
            <img src=<?= $other['nom_image']?> alt="images" style="width:100%" ></a><br>
        </div>

        <div class="info">
            <h2><p><?= $other['nom_complet']?></p></h2>
            <p><?= $other['historique']?></p>
        </div>
     </div>
     
 

</body>
</html>