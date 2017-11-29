<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="Voici un bref tableau récapitulatif des (presque) 10 premiers Pokémons.">
	<meta name="author" content="Guillaume et Paul-Antoine">
	<title>Pokémons ― Pokéweb</title>
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/pokemons.css" media="print">
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
			 --><li class="pokemon active"><a href="pokemons.php">Pokémons</a></li><!--
			 --><li class="medias"><a href="medias.php">Médias</a><!--
				 --><ul class="dropdownMedias">
			 			<li><a href="photos.php">Photos</a></li>
			 			<li><a href="videos.php">Vidéos</a></li>
			 		</ul>
			 	</li><!--
			 --><li class="contact"><a href="contact.php">Contact</a></li><!--
			 --><li class="credits"><a href="credits.php">Crédits</a></li><!--
			 --><li class="dons"><a href="dons.php">Dons</a></li>
			</ul>
		</nav>
	</header>
	<main>
		<div class="leftcol">
			<section class="pokemons">
				<h2><i class="fa fa-angle-double-right" aria-hidden="true"></i> Liste des Pokémons</h2>
				<article>
				<p class="lead">Voici un bref tableau récapitulatif des (presque) 10 premiers Pokémons.<br>
				<small style="font-size:0.75em;font-weight:normal;">Remarque : Cette page bénéficie d'un style CSS spécial pour l'impression papier. Essayez, vous verrez !</small></p>
				<table>
					<thead>
						<tr>
							<th>Nom</th>
							<th>Type(s)</th>
							<th>Attaque(s)</th>
							<th>Évolution</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><img src="img/pokemons/001_Bulbizarre.png" alt="Bulbizarre"></td>
							<td rowspan="2"><img src="img/pokemons/type/plante.png" alt="Plante" class="imagetype"><br><img src="img/pokemons/type/poison.png" alt="Poison" class="imagetype"></td>
							<td rowspan="2">Bomb-Beurk<br>Canon Graine<br>Mégafouet</td>
							<td rowspan="2">25 bonbons</td>					
						</tr>
						<tr>
							<th class="nomPokemon">#001 Bulbizarre</th>
						</tr>
						<tr>
							<td><img src="img/pokemons/002_Herbizarre.png" alt="Herbizarre"></td>
							<td rowspan="2"><img src="img/pokemons/type/plante.png" alt="Plante" class="imagetype"><br><img src="img/pokemons/type/poison.png" alt="Poison" class="imagetype"></td>
							<td rowspan="2">Bomb-Beurk<br>Lance-Soleil<br>Mégafouet</br>
							<td rowspan="2">100 bonbons</td>
						</tr>
						<tr>
							<th class="nomPokemon">#002 Herbizarre</th>
						</tr>
						<tr>
							<td><img src="img/pokemons/003_Florizarre.png" alt="Florizarre"></td>
							<td rowspan="2"><img src="img/pokemons/type/plante.png" alt="Plante" class="imagetype"><br><img src="img/pokemons/type/poison.png" alt="Poison" class="imagetype"></td>
							<td rowspan="2">Bomb-Beurk<br>Lance-Soleil<br>Tempête Florale</td>
							<td rowspan="2">-</td>					
						</tr>
						<tr>
							<th class="nomPokemon">#003 Florizarre</th>
						</tr>
						<tr>
							<td><img src="img/pokemons/004_Salameche.png" alt="Salamèche"></td>
							<td rowspan="2" class="type"><img src="img/pokemons/type/feu.png" alt="Feu" class="imagetype"></td>
							<td rowspan="2">Rebondifeu<br>Lance-Flammes<br>Nitrocharge</td>
							<td rowspan="2">25 bonbons</td>
						</tr>
						<tr>
							<th class="nomPokemon">#004 Salamèche</th>
						</tr>
						<tr>
							<td><img src="img/pokemons/005_Reptincel.png" alt="Reptincel"></td>
							<td rowspan="2" class="type"><img src="img/pokemons/type/feu.png" alt="Feu" class="imagetype"></td>
							<td rowspan="2">Rebondifeu<br>Lance-Flammes<br>Poing de Feu</td>
							<td rowspan="2">100 bonbons</td>
						</tr>
						<tr>
							<th class="nomPokemon">#005 Reptincel</th>
						</tr>
						<tr>
							<td><img src="img/pokemons/006_Dracaufeu.png" alt="Dracaufeu"></td>
							<td rowspan="2"><img src="img/pokemons/type/feu.png" alt="Feu" class="imagetype"><br><img src="img/pokemons/type/vol.png" alt="Vol" class="imagetype"></td>
							<td rowspan="2">Dracogriffe<br>Lance-Flammes<br>Déflagration</td>
							<td rowspan="2">-</td>
						</tr>
						<tr>
							<th class="nomPokemon">#006 Dracaufeu</th>
						</tr>
						<tr>
							<td><img src="img/pokemons/007_Carapuce.png" alt="Carapuce"></td>
							<td rowspan="2"><img src="img/pokemons/type/eau.png" alt="Eau" class="imagetype"></td>
							<td rowspan="2">Aqua-Jet<br>Hydroqueue<br>Vibraqua</td>
							<td rowspan="2">25 bonbons</td>
						</tr>
						<tr>
							<th class="nomPokemon">#007 Carapuce</th>
						</tr>
						<tr>
							<td><img src="img/pokemons/008_Carabaffe.png" alt="Carabaffe"></td>
							<td rowspan="2"><img src="img/pokemons/type/eau.png" alt="Eau" class="imagetype"></td>
							<td rowspan="2">Aqua-Jet<br>Hydrocanon<br>Laser Glace</td>
							<td rowspan="2">100 bonbons</td>					
						</tr>
						<tr>
							<th class="nomPokemon">#008 Carabaffe</th>
						</tr>
						<tr>
							<td><img src="img/pokemons/009_Tortank.png" alt="Tortank"></td>
							<td rowspan="2"><img src="img/pokemons/type/eau.png" alt="Eau" class="imagetype"></td>
							<td rowspan="2">Laser Glace<br>Hydrocanon<br>Luminocanon</td>
							<td rowspan="2">-</td>
						</tr>
						<tr>
							<th class="nomPokemon">#009 Tortank</th>
						</tr>
						<tr>
							<td><img src="img/pokemons/025_Pikachu.png" alt="Pikachu"></td>
							<td rowspan="2"><img src="img/pokemons/type/electrique.png" alt="Électrique" class="imagetype"></td>
							<td rowspan="2">Tonnerre<br>Coup d'Jus<br>Fatal-Foudre</td>
							<td rowspan="2">50 bonbons</td>
						</tr>
						<tr>
							<th class="nomPokemon">#025 Pikachu</th>
						</tr>
					</tbody>
				</table>
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