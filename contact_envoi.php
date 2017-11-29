<?php
$name = $email = $message = "Aucune donnée.";
$phone = $category = $firstVisit = "";
$error = 0;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(empty($_POST["name"]))
	{
		$name = "Merci d'indiquer votre nom.";
		$error = 1;
	} else
	{
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z ']*$/",$name))
		{
			$name = "Votre nom ne peut contenir que des lettres, des espaces ou des apostrophes.";
			$error = 1;
		}
	}

	if(empty($_POST["email"])){
		$email = "Vous n'avez pas entré votre adresse e-mail !";
		$error = 1;
	} else
	{
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$email = "Votre adresse e-mail n'est pas correcte.";
			$error = 1;
		}
	}

	if(empty($_POST["message"]))
	{
		$message = "Vous n'avez pas entré de message !";
		$error = 1;
	} else $message = nl2br(test_input($_POST["message"]));

	if(!empty($_POST["phone"]))
	{
		$phone = test_input($_POST["phone"]);
		if(preg_match("/^[0-9 ]*$/", $phone)){
			$phone = test_input($_POST["phone"]);
		} else
		{
			$phone = "Votre numéro de téléphone n'est pas correct.";
			$error = 1;
		}
	}

	if(empty($_POST["category"]))
	{
		$category = "Vous n'avez pas choisi de catégorie !";
		$error = 1;
	} else
	{
		$category = $_POST["category"];
		if(!($category == "Message" || $category == "Bug" || $category == "Suggestion"))
		{
			$category = 'Catégorie incorrecte. Tenteriez-vous de pirater le formulaire ? <i class="fa fa-frown-o" aria-hidden="true"></i>';
			$error = 1;
		}
	}

	if(empty($_POST["firstVisit"]))
	{
		$firstVisit = 'Vous n\'avez pas dit si c\'était votre première visite ou non. Tenteriez-vous de pirater le formulaire ? <i class="fa fa-frown-o" aria-hidden="true"></i>';
		$error = 1;
	} else
	{
		$firstVisit = $_POST["firstVisit"];
		if(!($firstVisit == "Oui" || $firstVisit == "Non"))
		{
			$firstVisit = 'Réponse incorrecte. Tenteriez-vous de pirater le formulaire ? <i class="fa fa-frown-o" aria-hidden="true"></i>';
			$error = 1;
		}
	}

} else $error = 1;

function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="robots" content="noindex,nofollow">
	<meta name="author" content="Guillaume et Paul-Antoine">
	<title>Contact ― Pokéweb</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="icon" href="favicon.ico">
	<link rel="icon" type="image/png" href="favicon.png">
</head>
<body>

<div id="socialNetworks">
	<a href="https://www.facebook.com/Pokemon" target="_blank" class="fb"></a>
	<a href="https://www.twitter.com/PokemonFR" target="_blank" class="tw"></a>
	<a href="https://www.youtube.com/PokemonOfficielFR" target="_blank" class="yt"></a>
</div>

<div id="wrapper">
	<header>
		<img src="img/logo.png" alt="Pokéweb"/>
		<p>Un zeste d'actualité autour du jeu phénomène du moment.</p>
		<nav>
			<ul>
				<li class="home"><a href="./">Accueil</a></li><!--
			 --><li class="pokemon"><a href="pokemons.php">Pokémons</a></li><!--
			 --><li class="medias"><a href="medias.php">Médias</a><!--
				 --><ul class="dropdownMedias">
			 			<li><a href="photos.php">Photos</a></li>
			 			<li><a href="videos.php">Vidéos</a></li>
			 		</ul>
			 	</li><!--
			 --><li class="contact active"><a href="contact.php">Contact</a></li><!--
			 --><li class="credits"><a href="credits.php">Crédits</a></li><!--
			 --><li class="dons"><a href="dons.php">Dons</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="leftcol">
			<section>
				<h2><i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact</h2>
				<article>
<?php
if ($error == 0)
{
echo '					<p class="lead"><i class="fa fa-check" aria-hidden="true"></i> Votre message a bien été envoyé, merci !</p>
					<p class="result">Contenu du message :<br><br>
						<b>Nom</b> : ' . $name . '<br>
						<b>Mail</b> : ' . $email . '<br>';
if(!empty($phone)) echo '<b>Téléphone</b> : ' . $phone . '<br>';
echo '
						<b>Catégorie</b> : ' . $category . '<br>
						<b>Première visite</b> : ' . $firstVisit . '<br>
						<b>Message</b> : <br>' . $message . '<br>
					</p>
';
} else
{
echo '					<p class="lead"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Votre message n\'a pas pu être envoyé car il contient des erreurs.</p>
					<p class="result">Contenu du message :<br><br>
						<b>Nom</b> : ' . $name . '<br>
						<b>Mail</b> : ' . $email . '<br>';
if(!empty($phone)) echo '<b>Téléphone</b> : ' . $phone . '<br>';
echo '
						<b>Catégorie</b> : ' . $category . '<br>
						<b>Première visite</b> : ' . $firstVisit . '<br>
						<b>Message</b> : <br>' . $message . '<br>
					</p>
';
}
?>
				</article>
			</section>
		</div>
		<div class="rightcol">
			<aside class="download">
				<h2><i class="fa fa-download" aria-hidden="true"></i> Télécharger Pokémon Go</h2>
				<a href="https://itunes.apple.com/fr/app/pokemon-go/id1094591345" target="_blank"><img src="img/iosApp.png" alt="Télécharger sur l'App Store"></a>
				<a href="https://play.google.com/store/apps/details?id=com.nianticlabs.pokemongo" target="_blank"><img src="img/androidApp.png" alt="Télécharger sur le Play Store"></a>
			</aside>
			<aside class="leaderboard">
				<h2><i class="fa fa-star" aria-hidden="true"></i> Top 5 meilleurs dresseurs</h2>
				<ul>
					<li class="first"><a href="http://www.topdresseur.fr/ville/Utilisateur/FicheIdentite.php?u=3288" target="_blank">1. LahouD33</a></li>
					<li class="second"><a href="http://www.topdresseur.fr/ville/Utilisateur/FicheIdentite.php?u=2516" target="_blank">2. Wirei</a></li>
					<li class="third"><a href="http://www.topdresseur.fr/ville/Utilisateur/FicheIdentite.php?u=3396" target="_blank">3. Alexpuk03boss</a></li>
					<li class="fourth"><a href="http://www.topdresseur.fr/ville/Utilisateur/FicheIdentite.php?u=3199" target="_blank">4. Ninou382</a></li>
					<li class="fifth"><a href="http://www.topdresseur.fr/ville/Utilisateur/FicheIdentite.php?u=2724" target="_blank">5. Kaurky</a></li>
				</ul>
				Source : <a href="http://www.topdresseur.fr/" target="_blank">topdresseur.fr</a><br>
				Mis à jour le 16/10/2016.
			</aside>
		</div>
	</main>
	<footer>
		<p><span>Pokéweb © 2016</span><br>
		Site internet fictif développé dans un objectif pédagogique. Pokéweb n'est pas affilié à The Pokémon Company ou à Niantic.<br>COTHENET Guillaume &amp; DENIS Paul-Antoine</p>
	</footer>
</div>

</body>
</html>