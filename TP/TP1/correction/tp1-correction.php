<html>
	<head>
		<meta charset="utf-8" />
		<title>Une page web</title>
		<link rel="stylesheet" href="style.css">
		<link href="prism.css" rel="stylesheet" />
		<script src="prism.js"></script>
	</head>
	<body>
		<!-- Exercice1 -->
		<?php 
			$prenom = "Lydia";
			$nom = "Rodriguez--de la Nava";
			echo "<h1> Bienvenue sur la page de $prenom $nom </h1>";
		?>

		<div id="toc">
			<h2>Table des matières</h2>
			<ul>
				<li><a href="#exo1"	>Exercice 1</a></li>
				<li><a href="#exo2"	>Exercice 2</a></li>
				<li><a href="#exo3"	>Exercice 3</a></li>
				<li><a href="#exo4"	>Exercice 4</a></li>
				<li><a href="#exo5"	>Exercice 5</a></li>
				<li><a href="#exo6"	>Exercice 6</a></li>
				<li><a href="#exo7"	>Exercice 7</a></li>
				<li><a href="#exo8"	>Exercice 8</a></li>
				<li><a href="#exo9"	>Exercice 9</a></li>
				<li><a href="#exo10">Exercice 10</a></li>
				<li><a href="#exo11">Exercice 11</a></li>
			</ul>
		</div>
		
		<div class="exo" id="exo1">
			<h2>Exercice 1</h2>
			<pre>
				<code class="language-php">
		&lt;?php 
			$prenom = &quot;Lydia&quot;;
			$nom = &quot;Rodriguez--de la Nava&quot;;
			echo &quot;&lt;h1&gt; Bienvenue sur la page de $prenom $nom &lt;/h1&gt;&quot;;
		?&gt;
				</code>
			</pre>
		</div>

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
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
					&ltul&gt
						&ltp&gt Date : &lt?php echo date("d-m-y");  ?&gt &lt/p&gt
						&ltp&gt Heure : &lt?php echo date("h-i-s"); ?&gt &lt/p&gt
						&lt?php
							echo "&ltli&gtFormat de date \"m.d.y\" : " . date("m.d.y") . "&lt/li&gt";
							echo "&ltli&gtFormat de date \"l\" : " . date("l") . "&lt/li&gt";
							echo "&ltli&gtFormat de date \"F\" : " . date("F") . "&lt/li&gt";

							echo "&ltli&gtHeure au format \"H:i:s\" : " . date("H:i:s") . "&lt/li&gt"; 
						?&gt
					&lt/ul&gt
				</code>
			</pre>
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
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;?php
				$day_to_jour = array(
					&quot;Monday&quot; =&gt; &quot;Lundi&quot;,
					&quot;Tuesday&quot; =&gt; &quot;Mardi&quot;,
					&quot;Wednesday&quot; =&gt; &quot;Mercredi&quot;,
					&quot;Thursday&quot; =&gt; &quot;Jeudi&quot;,
					&quot;Friday&quot; =&gt; &quot;Vendredi&quot;,
					&quot;Saturday&quot; =&gt; &quot;Samedi&quot;,
					&quot;Sunday&quot; =&gt; &quot;Dimanche&quot;
				);

				$month_to_mois = array(
					&quot;January&quot; =&gt; &quot;Janvier&quot;,
					&quot;February&quot; =&gt; &quot;F&eacute;vrier&quot;,
					&quot;March&quot; =&gt; &quot;Mars&quot;,
					&quot;April&quot; =&gt; &quot;Avril&quot;,
					&quot;May&quot; =&gt; &quot;Mai&quot;,
					&quot;June&quot; =&gt; &quot;Juin&quot;,
					&quot;July&quot; =&gt; &quot;Juillet&quot;,
					&quot;August&quot; =&gt; &quot;Ao&ucirc;t&quot;,
					&quot;September&quot; =&gt; &quot;Septembre&quot;,
					&quot;October&quot; =&gt; &quot;Octobre&quot;,
					&quot;November&quot; =&gt; &quot;Novembre&quot;,
					&quot;December&quot; =&gt; &quot;D&eacute;cembre&quot;
				);

				$nom_jour = date(&quot;l&quot;);
				$mois = date(&quot;F&quot;);
				$jour = date(&quot;d&quot;);
				$heure = date(&quot;Hhi&quot;);

				echo &quot;&lt;p&gt; Aujourd'hui on est le $day_to_jour[$nom_jour] $jour $month_to_mois[$mois] et il est $heure !&lt;/p&gt;&quot;;
			?&gt;
				</code>
			</pre>

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
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;?php
				$age = 19;

				if ($age &lt; 18) 
				{
					echo &quot;Vous avez $age ans. Vous &ecirc;tes mineur. Vous n'avez pas le droit d'acc&eacute;der &agrave; cette page.&quot;;
				} 
				else 
				{
					echo &quot;Vous avez $age ans. Vous &ecirc;tes majeur. Bienvenue sur cette page.&quot;;
				}
			?&gt;
				</code>
			</pre>
		</div>

		<!-- Exercice 5 -->
		<div class="exo" id="exo5"><h2>Exercice 5</h2>
			<h3>Affichage avec print_r</h3>
			<?php
				$arr = array("oui", "non", "peut-être", "pouvez-vous répéter la question ?");

				echo "<pre>\$arr = " . print_r($arr, true) . "</pre>";

			?>
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;?php
				$arr = array(&quot;oui&quot;, &quot;non&quot;, &quot;peut-&ecirc;tre&quot;, &quot;pouvez-vous r&eacute;p&eacute;ter la question ?&quot;);

				echo &quot;&lt;pre&gt;$arr = &quot; . print_r($arr, true) . &quot;&lt;/pre&gt;&quot;;

			?&gt;

				</code>
			</pre>

			<h3>Affichage avec une boucle for</h3>
			<ul>
				<?php
					for ($i=0; $i < count($arr); $i++) {
						echo "<li>$arr[$i]</li>";
					}
				?>
			</ul>
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;ul&gt;
				&lt;?php
					for ($i=0; $i &lt; count($arr); $i++) {
						echo &quot;&lt;li&gt;$arr[$i]&lt;/li&gt;&quot;;
					}
				?&gt;
			&lt;/ul&gt;
				</code>
			</pre>

			<h3>Affichage avec une boucle foreach</h3>
			<ul>
				<?php
					foreach ($arr as $reponse) {
						echo "<li>$reponse</li>";
					}
				?>
			</ul>
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;ul&gt;
				&lt;?php
					foreach ($arr as $reponse) {
						echo &quot;&lt;li&gt;$reponse&lt;/li&gt;&quot;;
					}
				?&gt;
			&lt;/ul&gt;
				</code>
			</pre>
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
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;?php
				$fruits = array(
					&quot;pomme&quot; =&gt; 3,
					&quot;kiwi&quot; =&gt; 2,
					&quot;banane&quot; =&gt; 10,
					&quot;fraise&quot; =&gt; 300
				);
			?&gt;
			&lt;table&gt;
				&lt;tr&gt;&lt;td&gt;fruit&lt;/td&gt;&lt;td&gt;quantit&eacute;&lt;/td&gt;&lt;/tr&gt;
				&lt;?php
					foreach ($fruits as $nom =&gt; $quantite) {
						echo &quot;&lt;tr&gt;&lt;td&gt;$nom&lt;/td&gt;&lt;td&gt;$quantite&lt;/td&gt;&lt;/tr&gt;&quot;;
					}
				?&gt;
			&lt;/table&gt;
				</code>
			</pre>
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
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;?php
				$arr = array(1, 2, 1, 3, 3, 1, 4, 2, 1);
				$nb_valeur = array();

				foreach ($arr as $val) {
					if (isset($nb_valeur[$val])) {
						$nb_valeur[$val] += 1;
					} else {
						$nb_valeur[$val] = 1;
					}
				}

				echo &quot;&lt;pre&gt;$arr = &quot; . print_r($nb_valeur, true) . &quot;&lt;/pre&gt;&quot;;
			?&gt;
				</code>
			</pre>
		</div>

		<!-- Exercice 8 -->
		<div class="exo" id="exo8">
			<h2>Exercice 8</h2>
			<h3>Question 1</h3>
			<?php
				$res = scandir(".");
				echo "<pre>Contenu du dossier : " . print_r($res, true) . "</pre>";
			?>
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;?php
				$res = scandir(&quot;.&quot;);
				echo &quot;&lt;pre&gt;Contenu du dossier : &quot; . print_r($res, true) . &quot;&lt;/pre&gt;&quot;;
			?&gt;
				</code>
			</pre>

			<h3>Question 2</h3>
			<?php
				foreach ($res as $file) {
					$info = pathinfo($file);
					echo "<pre>pathinfo($file) = " . print_r($info, true) . "</pre>";

				}
			?>
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;?php
				foreach ($res as $file) {
					$info = pathinfo($file);
					echo &quot;&lt;pre&gt;pathinfo($file) = &quot; . print_r($info, true) . &quot;&lt;/pre&gt;&quot;;

				}
			?&gt;
				</code>
			</pre>

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
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;ul&gt;
				&lt;?php
					foreach ($res as $file) {
						$info = pathinfo($file);

						if (isset($info[&quot;extension&quot;]) and ($info[&quot;extension&quot;] == &quot;php&quot; or $info[&quot;extension&quot;] == &quot;html&quot;)) {
							echo &quot;&lt;li&gt;&lt;a href='$file' &gt;$file&lt;/a&gt;&lt;/li&gt;&quot;;
						}
					}
				?&gt;
			&lt;/ul&gt;
				</code>
			</pre>
		</div>

		<!-- Exercice 9 -->
		<div class="exo" id="exo9"><h2>Exercice 9</h2>
			<h3>Question 1</h3>
			<?php
				$file_path = "/Applications/MAMP/bin/php/php7.4.33/conf/php.ini";

				$ini_file = parse_ini_file($file_path);

				echo "<pre> \$ini_file = " . print_r($ini_file, true) . "</pre>";

			?>
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;?php
				$file_path = &quot;/Applications/MAMP/bin/php/php7.4.33/conf/php.ini&quot;;

				$ini_file = parse_ini_file($file_path);

				echo &quot;&lt;pre&gt; $ini_file = &quot; . print_r($ini_file, true) . &quot;&lt;/pre&gt;&quot;;

			?&gt;
				</code>
			</pre>

			<h3>Question2</h3>
			<?php
				if ($ini_file["display_errors"] == 1) {
					echo "Display errors est On";
				} else {
					echo "Display errors est Off";
				}
			?>
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;?php
				if ($ini_file[&quot;display_errors&quot;] == 1) {
					echo &quot;Display errors est On&quot;;
				} else {
					echo &quot;Display errors est Off&quot;;
				}
			?&gt;
				</code>
			</pre>
		</div>

		<!-- Exercice 10 -->
		<div class="exo" id="exo10">
			<h2>Exercice 10</h2>
			<?php
				echo "<pre>\$_SERVER = " . print_r($_SERVER, true) . "</pre>";
			?>
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;?php
				echo &quot;&lt;pre&gt;$_SERVER = &quot; . print_r($_SERVER, true) . &quot;&lt;/pre&gt;&quot;;
			?&gt;
				</code>
			</pre>
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
			<h4>Solution : </h4>
			<pre>
				<code class="language-php">
			&lt;table&gt;
				&lt;?php
					for ($i=1; $i &lt;= 10; $i++) {
						echo &quot;&lt;tr&gt;&lt;td&gt;$i*2&lt;/td&gt;&lt;td&gt;&quot; . $i*2 . &quot;&lt;/td&gt;&lt;/tr&gt;&quot;;
					}
				?&gt;
			&lt;/table&gt;
				</code>
			</pre>
		</div>
	</body>
</html>












