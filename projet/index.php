<?php
  $data = require_once("donnee.php")
  
  
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>


<header>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container-fluid">
      <button
              class="navbar-toggler"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="index.php">Acceuil</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->

  <!-- Background image -->
  <div
          class="p-5 text-center bg-image"
          style="
          background-image: url('https://eduscol.education.fr/numerique/tout-le-numerique/veille-education-numerique/archives/2015/octobre-2015/construire-education-au-numerique/@@images/9c5b3e40-7d4d-4f8d-aa78-c1fdd5721314.png');
          height: 400px;
        "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">LA SEMAINE DU NUMERIQUE</h1>
          <h4 class="mb-3">Venez decouvrir avec nous les hommes et femmes qui ont marqués l'histoire du numerique </h4>
          
          
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>



<div class="container" >
<?php foreach($data as $personne):?>
</div class="row">
      </div>
    <ul>
    <li class="cards_item">
      <div class="card">
      <a href="detail.php?id=<?php echo $personne['id_per']?>"><div class="card_image"><img src=<?= $personne['nom_image']?> alt="image"></div></a>
        <div class="card_content">
          <h2 class="card_title"><?= $personne['nom_complet']?></h2>
          
        </div>
      </div>
    </li>
  </ul>
</div>
<?php endforeach ?>
</div>

</body>
</html>