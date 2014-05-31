<?php 
require_once 'files/bdd.php';
 ?>
<html>
<head>
  <meta charset="utf-8">
  <title>La Cité dans le Ciel</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
  <?php require_once 'files/nav.php'; ?>

  <div class="container">
    <div class="row">

      <div class="col-md-7">
        <?php 
        $reponse = $bdd->query('SELECT * FROM news ORDER BY id DESC');
        while ($donnees = $reponse->fetch()) { ?>


        <div class="panel panel-success">
        <div class="panel-heading"><?php echo $donnees['title']; ?></div>
        <div class="panel-content"><?php echo $donnees['content']; ?></div>
        <div class="panel-footer">Auteur: <?php echo $donnees['author']; ?></div>
        </div>
        <hr>

        <?php
        }
        $reponse->closeCursor();
         ?>
    </div>

    <?php require_once 'files/right.php'; ?>

    </div>
  </div>

  <?php require_once 'js/down.php'; ?>
</body>
</html>