# Une bibliothèque d'images personnalisée
![[Capture d’écran 2024-06-24 à 10.22.02.png]]
## La structure de la page
Dans un fichier `index.php`, on doit retrouver :

- une `<div>` dont l'attribut `class` vaut `forms` ;
	- une `<div>` dont l'attribut `class` vaut `form` :
		- un formulaire qui redirige vers cette même page, qui envoie les informations par la méthode `post` et l'attribut `enctype` est celui pour le cas où on veut envoyer des fichiers.
	- une deuxième `<div>` dont l'attribut `class` vaut `form` :
		- un formulaire qui redirige vers cette même page, qui envoie les informations par la méthode `post`.
- une `<div>` dont l'`id` vaut `image`.

## Le style de la page
Le choix du style de la page est complètement le vôtre, faites un fichier `style.css` pour mettre la page à votre goût.

Si vous êtes en panne d'inspiration pour choix des couleurs, je vous conseil le site https://coolors.co/ (c'est gratuit).

## Les sessions
Dans `index.php`, on doit retrouver comme tout premier code PHP le code suivant :
```PHP
<?php
	session_start();
	
	$nom_dossier = "img_" . session_id();
?>
```

À quoi sert `session_start()` ? 
Que représente `session_id()` ?

Recherchez par vous-même le principe des sessions en PHP et écrivez une synthèse en MarkDown de ce que vous avez appris. 

Toutes les références que vous avez utilisées devront être fournies (les URLs des sites que vous avez lus par exemple).

## Enregistrer une image
Dans le fichier `fonction-fichier.php`, implémentez la fonction  

```PHP
function enregistrer_image($nom_dossier, $nom_fichier, $nom_tmp, $extensions=array("jpeg", "jpg", "png"))
```

La fonction commence par vérifier que le dossier qui s'appelle `$nom_dossier` existe, et qui le crée si ce n'est pas le cas.

On enregistre le fichier dans le serveur seulement si l'extension de `$nom_fichier` existe dans l'array `$extensions`, puis la fonction renvoie `1`.

Si l'extension n'est pas bonne, la fonction renvoie `0`.

## Contenu d'un dossier en `<select>`
Implémentez la fonction suivante :
```PHP
function dossier_en_select($nom_dossier, $extensions=array("jpeg", "jpg", "png"))
```
qui commence par récupérer le nom de tous les fichiers dans le dossier `$nom_dossier`, et qui pour chaque fichier vérifie si l'extension est bien dans `$extensions`. Si c'est le cas, on crée une balise `<option>` qui contient le nom de fichier.

La fonction doit renvoyer du code HTML d'un `<select>` qui contient toutes les `<option>` des fichiers qui sont des images.

## On met tout ensemble
Vous avez maintenant tous les blocs qui permettent de créer l'application, à vous de jouer pour trouver la logique qui vous plait le plus.

Vous devrez justifier vos choix dans un fichier MarkDown qui m'expliquera ce que vous avez voulu faire, et comment vous avez essayé de le mettre en place. 

Si votre code ne fonctionne pas, ce n'est pas grave. Essayez de comprendre pourquoi ça ne marche pas, et expliquez-moi comment on pourrait faire pour que ça marche.

La propreté de votre code sera néanmoins pris en compte dans la note finale, donc programmez soigneusement !