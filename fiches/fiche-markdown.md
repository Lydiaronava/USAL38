## Les titres
Comme en HTML, il y a plusieurs niveaux de titres. Sauf qu'au lieu des `h1`, `h2`, etc... le niveau d'un titre dépend du nombre de `#` devant :

```md
# Titre niveau 1 (h1)
## Titre niveau 2 (h2)
### Titre niveau 3 (h3)
#### Titre niveau 4 (h4)
##### Titre niveau 5 (h5)
###### Titre niveau 6 (h6)
```

## Mise en forme du texte
### Italique
| Syntaxe | md                    | rendu               |
| ------- | --------------------- | ------------------- |
| `* *`   | `*Du texte italique*` | *Du texte italique* |
| `_ _`   | `_Du texte italique_` | _Du texte italique_ |
|         |                       |                     |

### Gras
| Syntaxe | md                  | rendu             |
| ------- | ------------------- | ----------------- |
| `** **` | `**Du texte gras**` | **Du texte gras** |
| `__ __` | `__Du texte gras__` | __Du texte gras__ |
|         |                     |                   |

### Gras et italique
| Syntaxe   | md                                | rendu                           |
| --------- | --------------------------------- | ------------------------------- |
| `*** ***` | `***Du texte gras et italique***` | ***Du texte gras et italique*** |
| `___ ___` | `___Du texte gras et italique___` | ___Du texte gras et italique___ |

### Barré
| Syntaxe | md                   | rendu              |
| ------- | -------------------- | ------------------ |
| `~~ ~~` | `~~Du texte barré~~` | ~~Du texte barré~~ |

## Les tableaux
On peut facilement créer des tableaux en markdown. Par exemple :
```md
| NomColonne1 | NomColonne2 | NomColonne 3 |
| ----------- | ----------- | ------------ |
| Case11      | Case12      | Case13       |
| Case21      | Case22      | Case23       |
| Case31      | Case32      | Case33       |
```
donne le rendu suivant :

| NomColonne1 | NomColonne2 | NomColonne 3 |
| ----------- | ----------- | ------------ |
| Case11      | Case12      | Case13       |
| Case21      | Case22      | Case23       |
| Case31      | Case32      | Case33       |

## Insérer du code
On peut afficher du code de la façon suivante :
```md
	```C
	int a = 3;
	printf("Hello World\n");
	```
```

qui rend :

```C
int a = 3;
printf("Hello World\n");
```

Après les 3 guillemets on peut mettre le nom du langage du code, ce qui permettra d'avoir un rendu avec la coloration syntaxique spécifique au langage.

Autre exemple, sur du code JavaScript (ou js) :
```md
	```js
		let a = document.getElementById("id1");
		a.innerHTML = "<h1>Titre</h1>";
	```
```

rend :
```js
let a = document.getElementById("id1");
a.innerHTML = "<h1>Titre</h1>";
```

## Écrire des formules mathématiques
On peut écrire des formules mathématiques en le mettant entre des `$`.

Par exemple, `$ax^2 + bc + c = 0$` est rendu $ax^2 + bc + c = 0$.

Pour voir plus de symboles, voir https://www.cmor-faculty.rice.edu/~heinken/latex/symbols.pdf

## Écrire une liste
### Liste non-ordonnée
On fait simplement une liste avec des `-`:
```md
- item1
	- item 11
	- item 12
- item2
- item3
	- item 31
```

est rendu :
- item1
	- item 11
	- item 12
- item2
- item3
	- item 31

### Liste ordonnée
On fait une liste qui commence par des numéros :
```md
1. item1
2. item2
	1. item 21
	2. item 22
3. item3
```
 rend :
1. item1
2. item2
	1. item 21
	2. item 22
3. item3

### Mélanger liste non-ordonnée et ordonnée
On peut très bien imbriquer les deux types de listes à notre guise !

1. item1
2. item2
	- item 21
	- item 22
3. item3

 ou
 
- item1
- item2
	1. item 21
	2. item 22
- item3

## Liens
todo










