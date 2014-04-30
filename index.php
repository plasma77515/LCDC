<!DOCTYPE html>
<html class="no-js" lang="en" >

	<head>
  		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<title>La Cité dans le Ciel</title>

  					<!-- Chargement CSS -->
  			<link rel="stylesheet" href="css/normalize.css">
  			<link rel="stylesheet" href="css/foundation.css">
  			<link rel="stylesheet" href="css/app.css">
  		<style>
  			.twitter:hover {
  				color: #55acef;
  			}
  		</style>
  						<!-- Fin -->
					<!-- Chargement JS -->
			<script src="js/vendor/modernizr.js"></script>
						<!-- Fin -->
	</head>
	<body>

  <nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">La Cité dans le Ciel</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="left">
    <li><a href="#">Accueil</a></li>
      <li class="has-dropdown">
        <a href="#">Equipes</a>
        <ul class="dropdown">
          <li><a href="#">Equipe Rouge</a></li>
          <li><a href="#">Equipe Bleu</a></li>
          <li><a href="#">Equipe Verte</a></li>
        </ul>
      </li>
    </ul>
  </section>
</nav>
<?php require_once 'files/footer.php'; ?>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
	</body>
</html>