<html>
	<head>
		<meta charset="utf-8" />
		<title>Une page web</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<?php
			if (isset($_POST["utilisateur"]) and  isset($_POST["motdepasse"])) {
				if ($_POST["utilisateur"] === "truc" and $_POST["motdepasse"] === "1234") {
					echo "<h1>Connexion réussie</h1>";
				} else {
					echo "<h1 style='color: red;'>Connexion échouée</h1>";

					unset($_POST["utilisateur"]);
					unset($_POST["motdepasse"]);
				}
			} 
			if (! isset($_POST["utilisateur"]) and ! isset($_POST["motdepasse"])) {
		?>
		<form action="" method="post">
			<label for="user">Utilisateur</label>
			<input type="text" id="user" name="utilisateur" />

			<label for="mdp">Mot de passe</label>
			<input type="text" id="mdp" name="motdepasse" />

			<input type="submit" value="Se connecter" />
		</form>
		<?php 
			}
		?>
	</body>
</html>