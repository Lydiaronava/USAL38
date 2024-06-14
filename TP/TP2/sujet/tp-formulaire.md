# TP Formulaires
## Question 1
Créez un fichier PHP qui s'appelle `formulaire.php`.

## Question 2
À l'intérieur de `formulaire.php`, créez une page HTML qui affiche un formulaire où l'attribut `action` vaut "connexion.php" et `method` vaut "get", et qui contient
	1) un élément `<input>` de type `text` et dont l'attributs `id` vaut `user`, et l'attribut `name` vaut `utilisateur` ;
	2) un élément `<input>` de type `text` et dont l'attribut `id` vaut `mdp`, et l'attribut `name` vaut `motdepasse` ;
	3) un élément `<inpu>` de type `submit` dont l'attribut `value` vaut "Se connecter".

## Question 3
Créez un fichier PHP qui s'appelle `connexion.php`.

## Question 4
Dans `connexion.php`, afficher le contenu du tableau `$_GET`.

## Question 5
Maintenant, testez votre formulaire avec des valeurs quelconques. 

## Question 6
Changez l'attribut `method` de votre formulaire pour lui donner "post", et dans `connexion.php` affichez le tableau `$_POST`. Qu'est-ce qui change entre les deux méthodes ?

## Question 7
Dans `connexion.php`, écrivez un script tel que :
	1) si `utilisateur` vaut "truc" et `motdepasse` vaut "1234", la page affiche "Authentification réussie" ;
	2) sinon la page affiche "Nom d'utilisateur ou mot de passe incorrect, veuillez réessayer", en rouge.
## Question 8
Faire tout dans la même page ? 
