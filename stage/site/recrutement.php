<?php
	// Initialiser la session
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nous rejoindre</title>
	<link rel="stylesheet" type="text/css" href="site.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body class="recrutement">
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
		<div class="boite-recru">
				<img class="img-recru" src="../img/chauffeur-prive.jpg" >
			<div class="form-recru">
				<form action="" method="get" class="formulaire">
					<fieldset>
						<legend>Formulaire</legend>
							<label for="email">Votre mail</label><br>
							<input type="email" name="email" id="email" placeholder="Votre email" required><br>
							<label for="objet">Objet</label><br>
							<input type="text" name="name" id="name" placeholder="Objet" required><br>
							<label>Commentaire</label><br>
							<input type="text" name="com" id="com" placeholder="Commentaire (facultatif)"><br>
							<label>CV</label><br>
							<input id="filec" type="file" name="doc" id="doc" multiple/>
							<label>  Lettre de motivation</label><br>
							<input id="file" type="file" name="doc" id="doc" multiple/><br><br>
							<input type="submit" value="Envoyez">
					</fieldset>
				</form>
			</div>
			</div>			
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