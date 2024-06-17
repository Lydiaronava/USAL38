## Exercice 1
Écrivez la fonction `array_to_row` qui prend en argument un array et qui renvoie le code HTML (sous forme de chaîne de caractère) des valeurs de ce tableau comme une ligne d'une table HTML.

Par exemple :
```PHP
<?php
	$fruits = array("pomme", "poire", "kiwi");

	echo array_to_row($fruit);
	// renvoie <tr><td>pomme</td><td>poire</td><td>kiwi</td></tr>
?>
```

## Exercice 2
Écrivez la fonction `array_to_list($arr, $type = 'ol')` qui renvoie le code HTML des valeurs de `$arr` sous forme de liste de type `$type` qui peut être soit 'ol' ou 'ul'. 

## Exercice 3
Écrivez la fonction `creer_head($title, $fichier_style)` qui renvoie le code HTML d'un head avec le titre `$title` et qui inclut le fichier CSS `$fichier_style`

Par exemple :
```PHP
<?php
	echo creer_head("Le titre de ma page", "style.css");
?>
```
doit renvoyer :
```HTML
<head>
	<title>Le titre de ma page</title>
	<link rel="stylesheet" href="style.css" />
</head>
```

## Exercice 4
Créez une page qui commence par vérifier si le cookie "visite" existe.

Si le cookie n'existe pas, on affiche "Bienvenue, c'est votre première visite !" et on crée le cookie, sinon on affiche "Vous êtes de retour sur la page, bravo !".

## Exercice 5
Créez une page qui commence par vérifier si le cookie "nb_visites" existe.

Si le cookie n'existe pas, on le crée et on l'initialise à un. Sinon, on ajoute un à sa valeur actuelle.

Affichez la valeur du cookie sur votre page pour visualiser son évolution.

## Exercice 6
Reprenez le formulaire du tp sur les formulaires. 

Maintenant, dès que l'utilisateur a envoyé le formulaire, on stocke dans un cookie son nom d'utilisateur. 

Si on connaît le nom de l'utilisateur dans les cookies, on remplit directement le champs son nom d'utilisateur.