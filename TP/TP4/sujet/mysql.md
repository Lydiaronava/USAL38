
## Installation de la base de données des films
Commencez par enregistrer sur votre ordinateur la base de données Films.sql.zip.

Dans PHPMyAdmin (http://localhost:8888/phpMyAdmin5/), cliquez sur "Nouvelle base de donneés", et appelez-la Films.

Cliquez ensuite sur "Importer", et sélectionnez Films.sql.zip, puis cliquez sur Importer en base.

## Connexion
Créez une page PHP avec le code suivant :
```PHP
<html>
	<head>
		<meta charset="utf-8" />
		<title>Une page avec du SQL</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
<?php
	$nom_serveur = 'localhost';
	$user = 'root';
	$mdp = 'root';

	// se connecter au serveur MySQL
	$mysql = new mysqli($nom_serveur, $user, $mdp);

	// vérifier que la connexion s'est bien passée
	if ($mysql->connect_error) { // renvoie true s'il y a eu une erreur
		exit('Connexion echouée');
	} else {
		echo "<h1>Connexion réussie</h1>"
	}
?>
	</body>
</html>
```

## Afficher les bases de données
Pour faire un requête SQL sur notre base de données, on va utiliser la méthode `query`.

Par exemple, ajoutez le code suivant à votre fichier PHP :
```PHP
	$resultat = $mysql->query($requete);

	if (! $resultat) {
		echo "<h1>erreur requete</h1>";
	}

	while ($row = $resultat->fetch_object()) {
        echo '<pre>' . print_r($row) . '</pre>';
    }
```

## Se connecter à une base de données en particulier
Créez un nouveau fichier PHP qui se connecte à la base de données Films.

Pour cela, il suffit de préciser à la connexion qu'on veut se connecter à films de la manière suivante :

```PHP
$mysql = new mysqli($nom_serveur, $user, $mdp, `Films`);
```

Vérifiez que la connexion s'est bien passée.

## Première requête sur la base Films
Écrivez une requête pour récupérer toute la table Film, et affichez le résultat.

Pensez bien à tester que la requête n'a pas eu d'erreur !

## Afficher sous forme de table HTML
Vous avez normalement remarquer que dans la boucle pour afficher le résultat d'une requête, on doit afficher ligne par ligne.

Et une ligne est un tableau qui ressemble à quelque chose comme ça :
```
 [idFilm] => 24, 
 [titre] => Kill Bill: Vol. 1
 [année] => 2003 
 [idRéalisateur] => 138 
 [genre] => Action 
 [résumé] => An assassin is shot by her ruthless employer, Bill, and other members of their assassination circle – but she lives to plot her vengeance. 
 [codePays] => US
```

Pour chaque ligne on a donc un tableau dont les clés sont les noms des colonnes, et les valeurs sont leur contenu dans cette ligne.

Utilisez donc la fonction `array_to_table` écrite au TP3 pour afficher toute la table en HTML.

## Ajouter une ligne
Créez une page qui affiche un formulaire en méthode get qui permet d'entrer un nom, un prénom et une année de naissance.

À l'envoi de ce formulaire, on devrait donc avoir dans `$_GET` toutes les informations entrées, et on pourra donc les ajouter à notre base de données !

Si je voulais afficher une nouvelle ligne à la table Artiste par exemple je ferais :

```PHP
<?php
	$id = 898;
	$nom = "McGregor";
	$prénom = "Ewan";
	$anneeNaiss = 1990;

	$rq = "INSERT INTO `Artiste` (idArtiste, nom, prénom, annéeNaiss) VALUES ($id, '$nom', '$prenom', $anneeNaiss)";
?>
```

Faites la même chose, mais en remplaçant les valeurs par le contenu du formulaire.





