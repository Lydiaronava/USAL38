<html>
	<head>
		<meta charset="utf-8" />
		<title>Formulaire envoyé</title>
	</head>
	<body>
		<?php
			if ($_POST["utilisateur"] == "truc" and $_POST["motdepasse"] == "1234") {
		?>
		<h1>Authentification réussie</h1>;
		<?php
			} else {
		?>
		<h1 style='color: red;'>Nom d'utilisateur ou mot de passe incorrect, veuillez réessayer</h1>
		<?php
			}
		?>
	</body>
</html>