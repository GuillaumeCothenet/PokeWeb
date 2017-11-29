<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="Faîtes nous part d'une petite compensation financière en échange de notre dur travail... ou pas.">
	<meta name="author" content="Guillaume et Paul-Antoine">
	<title>Faire un don ― Pokéweb</title>
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
			 --><li class="contact"><a href="contact.php">Contact</a></li><!--
			 --><li class="credits"><a href="credits.php">Crédits</a></li><!--
			 --><li class="dons active"><a href="dons.php">Dons</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="leftcol">
			<section class="dons">
				<h2><i class="fa fa-angle-double-right" aria-hidden="true"></i> Faire un don</h2>
				<p class="lead">Parce que réaliser ce site internet a été une rude épreuve, et parce que l'hébergement, ainsi que l'administration de ce dernier ont un coût, nous vous serions (très) redevables de nous faire part d'une légère (ou grande) donation.</p>
				<p>Ainsi, sur cette page, vous pouvez choisir le montant que vous souhaitez nous donner.</p>
				<div style="text-align:center;">
					<input id="montant" type="text"><br>
					<input type="button" value="Faire un don !" onClick="donate();"><br>
				</div>
				<p>Bon, en réalité, cette page est totalement fictive... Elle sert simplement à ce que nous n'ayons pas un menu trop petit dans le <i>header</i>.<br>
				Bien évidemment, votre compte bancaire ne sera pas débité si vous décidez, à tout hasard, de nous faire une donation d'un million d'euros. Même si ça reste une délicate attention. Et nous vous en remercions.</p>
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
<script>
function donate(){
	var montant;
	var reg = /^\d+$/;
	montant = document.getElementById("montant").value;
	if(!reg.test(montant)){montant = -1;}
	if(montant <= 0 || montant == ""){alert("C'est pas vraiment un don, ça...");}
	else if(montant < 20){alert("Merci, mais vous auriez pu donner un peu plus...");}
	else if(montant < 500){alert("Merci ! On aurait pu se contenter de plus, mais ça ira.");}
	else if(montant < 10000){alert("Merci bien, ça c'est une vraie donation !");}
	else if(montant >= 10000){alert("Merci infiniment !");rainbow();}
}

function rainbow(){
	var colors = ["rgba(255,200,200,0.75)", "rgba(200,255,200,0.75)", "rgba(200,200,255,0.75)"];
	var i = 0;
	window.setInterval(function(){
		document.getElementById("wrapper").style.backgroundColor = colors[i];
		i++;
		if (i == colors.length){
			i=0;
		}
	}, 200);
}
</script>

</body>
</html>