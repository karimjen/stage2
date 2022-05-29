<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["email"])){
		header("Location: ../connexion/connexion.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Réserver</title>
	<link rel="stylesheet" type="text/css" href="site.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body class="reserver">
	<header>
		<nav>
		<input id="menu-toggle" type="checkbox" />
    	<label class='menu-button-container' for="menu-toggle">
    	<article class='menu-button'></article>
    	</label>
			<ul class="menu">
				<li class="onglet">
					<a href="entree.php">Accueil</a>
				</li>
				<li class="onglet">
					<a href="reserver.php">Réserver</a>
				</li>
				<li class="onglet">
					<a href="recrutement.php">Nous Rejoindre</a>
				</li>
			</ul>
		</nav>
		<h1 class="titre">
			AJ Transports
		</h1>
		<?php
		if(!isset($_SESSION["email"])){?>
		<button>
			<a href="../connexion/connexion.php">Connexion</a>
		</button><?php	 
		} else{?>
			<button>
			<a href="../connexion/deconnexion.php">déconnexion</a>
		</button><?php
		}
		?>
	</header>
	<section>		
	</section>
	<footer>
		<h1>
			AJ Transports
		</h1>
		<div class="left box">
			<h2>Address</h2>
			<div class="content">
			  <div class="phone">
				<span class="fas fa-phone-alt"></span>
				<span class="text">06 41 58 94 40</span>
			  </div>
			  <div class="email">
				<span class="fas fa-envelope"></span>
				<span class="text">tunsijamil@hotmail.com</span>
			  </div>
			</div>
		  </div>
		  <br>
		  <div class="right box">
			<h2>Contactez-nous</h2> 	
			<div class="content">
			  <form action="#">
				<div class="email">
				  <div class="text">Email</div>
				  <input type="email" required>
				</div>
				<div class="msg">
				  <div class="text">Message</div>
				  <input type="text">
				</div>
				<div class="btn">
				  <button type="submit">Envoyer</button>
				</div>
			  </form>
			</div>
		  </div>				
	</footer>
</body>
</html>