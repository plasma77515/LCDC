<?php 
$query = $bdd->query("SELECT COUNT(*) AS part FROM participants");
$participants = $query->fetch(PDO::FETCH_OBJ);
$nb_part = $participants->part;
 ?>
<div class="navbar navbar-inverse">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#"><img src="img/logo.png" width="32px">La Cité Dans le Ciel</a>
  </div>
  <div class="navbar-collapse collapse navbar-inverse-collapse">
    <ul class="nav navbar-nav">
      <li><a href="index.php">Accueil</a></li>
      <li><a href="participants.php">Participants</a></li>
      <li><a><img src="http://openclipart.org/image/800px/svg_to_png/135451/minecraft.png" width="22px"/> Nombre de participants: <?php echo $nb_part; ?></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="post.php">Participer à l'aventure !</a></li>
    </ul>
  </div>
</div>