<html>
	<head>
		<meta charset="utf-8" />
		<title>Une page web</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<!-- Exercice1 -->
		<?php 
			$prenom = "Lydia";
			$nom = "Rodriguez--de la Nava";
			echo "<h1> Bienvenue sur la page de $prenom $nom </h1>";
		?>

		<!-- Exercice 2 -->
		<div class="exo" id="exo2">
			<h2>Exercice 2</h2>
			<ul>
				<p> Date : <?php echo date("d-m-y");  ?> </p>
				<p> Heure : <?php echo date("h-i-s"); ?> </p>
				<?php
					echo "<li>Format de date \"m.d.y\" : " . date("m.d.y") . "</li>";
					echo "<li>Format de date \"l\" : " . date("l") . "</li>";
					echo "<li>Format de date \"F\" : " . date("F") . "</li>";

					echo "<li>Heure au format \"H:i:s\" : " . date("H:i:s") . "</li>"; 
				?>
			</ul>
		</div>

		<!-- Exercice 3 -->
		<div class="exo" id="exo3">
			<h2>Exercice 3</h2>
			<?php
				$day_to_jour = array(
					"Monday" => "Lundi",
					"Tuesday" => "Mardi",
					"Wednesday" => "Mercredi",
					"Thursday" => "Jeudi",
					"Friday" => "Vendredi",
					"Saturday" => "Samedi",
					"Sunday" => "Dimanche"
				);

				$month_to_mois = array(
					"January" => "Janvier",
					"February" => "Février",
					"March" => "Mars",
					"April" => "Avril",
					"May" => "Mai",
					"June" => "Juin",
					"July" => "Juillet",
					"August" => "Août",
					"September" => "Septembre",
					"October" => "Octobre",
					"November" => "Novembre",
					"December" => "Décembre"
				);

				$nom_jour = date("l");
				$mois = date("F");
				$jour = date("d");
				$heure = date("H\hi");

				echo "<p> Aujourd'hui on est le $day_to_jour[$nom_jour] $jour $month_to_mois[$mois] et il est $heure !</p>";
			?>
		</div>

		<!-- Exercice 4 -->
		<div class="exo" id="exo4">
			<h2>Exercice 4</h2>
			<?php
				$age = 19;

				if ($age < 18) 
				{
					echo "Vous avez $age ans. Vous êtes mineur. Vous n'avez pas le droit d'accéder à cette page.";
				} 
				else 
				{
					echo "Vous avez $age ans. Vous êtes majeur. Bienvenue sur cette page.";
				}
			?>
		</div>

		<!-- Exercice 5 -->
		<div class="exo" id="exo5"><h2>Exercice 5</h2>
			<h3>Affichage avec print_r</h3>
			<?php
				$arr = array("oui", "non", "peut-être", "pouvez-vous répéter la question ?");

				echo "<pre>\$arr = " . print_r($arr, true) . "</pre>";

			?>

			<h3>Affichage avec une boucle for</h3>
			<ul>
				<?php
					for ($i=0; $i < count($arr); $i++) {
						echo "<li>$arr[$i]</li>";
					}
				?>
			</ul>

			<h3>Affichage avec une boucle foreach</h3>
			<ul>
				<?php
					foreach ($arr as $reponse) {
						echo "<li>$reponse</li>";
					}
				?>
			</ul>
		</div>

		<!-- Exercice 6  -->
		<div class="exo" id="exo6">
			<h2>Exercice 6</h2>
			<?php
				$fruits = array(
					"pomme" => 3,
					"kiwi" => 2,
					"banane" => 10,
					"fraise" => 300
				);
			?>
			<table>
				<tr><td>fruit</td><td>quantité</td></tr>
				<?php
					foreach ($fruits as $nom => $quantite) {
						echo "<tr><td>$nom</td><td>$quantite</td></tr>";
					}
				?>
			</table>
		</div>

		<!-- Exercice 7 -->
		<div class="exo" id="exo7">
		<h2>Exercice 7</h2>
			<?php
				$arr = array(1, 2, 1, 3, 3, 1, 4, 2, 1);
				$nb_valeur = array();

				foreach ($arr as $val) {
					if (isset($nb_valeur[$val])) {
						$nb_valeur[$val] += 1;
					} else {
						$nb_valeur[$val] = 1;
					}
				}

				echo "<pre>\$arr = " . print_r($nb_valeur, true) . "</pre>";
			?>
		</div>

		<!-- Exercice 8 -->
		<div class="exo" id="exo8">
			<h2>Exercice 8</h2>
			<h3>Question 1</h3>
			<?php
				$res = scandir(".");
				echo "<pre>Contenu du dossier : " . print_r($res, true) . "</pre>";
			?>

			<h3>Question 2</h3>
			<?php
				foreach ($res as $file) {
					$info = pathinfo($file);
					echo "<pre>pathinfo($file) = " . print_r($info, true) . "</pre>";

				}
			?>

			<h3>Question 3</h3>
			<ul>
				<?php
					foreach ($res as $file) {
						$info = pathinfo($file);

						if (isset($info["extension"]) and ($info["extension"] == "php" or $info["extension"] == "html")) {
							echo "<li><a href='$file' >$file</a></li>";
						}
					}
				?>
			</ul>
		</div>

		<!-- Exercice 9 -->
		<div class="exo" id="exo9"><h2>Exercice 9</h2>
			<h3>Question 1</h3>
			<?php
				$file_path = "/Applications/MAMP/bin/php/php7.4.33/conf/php.ini";

				$ini_file = parse_ini_file($file_path);

				echo "<pre> \$ini_file = " . print_r($ini_file, true) . "</pre>";

			?>

			<h3>Question2</h3>
			<?php
				if ($ini_file["display_errors"] == 1) {
					echo "Display errors est On";
				} else {
					echo "Display errors est Off";
				}
			?>
		</div>

		<!-- Exercice 10 -->
		<div class="exo" id="exo10">
			<h2>Exercice 10</h2>
			<?php
				echo "<pre>\$_SERVER = " . print_r($_SERVER, true) . "</pre>";
			?>
		</div>

		<!-- Exercice 11 -->
		<div class="exo" id="exo11">
			<h2>Exercice 11</h2>
			<table>
				<?php
					for ($i=1; $i <= 10; $i++) {
						echo "<tr><td>$i*2</td><td>" . $i*2 . "</td></tr>";
					}
				?>
			</table>
		</div>
	</body>
</html>












