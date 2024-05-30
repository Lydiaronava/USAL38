
## Exercices sur les tableaux d'entiers
### Exercice 1 : initialiser un tableau
Écrivez la fonction `void init_tableau(int tableau[], int taille)` où `tableau` est un pointeur sur un tableau d'entier, et `taille` est un entier qui contient la taille du tableau, et qui initialise la première case du tableau à 1, la deuxième à 2, etc...

### Exercice 2 : afficher les valeurs d'un tableau
Écrivez la fonction `void print_tableau(int tableau[], int taille)` qui affiche dans la console les valeurs du tableau.

Exemple d'appel à la fonction :
```c
int tab[5] = { 1, 2, 3, 4, 5};
print_tableau(tab, 5); // affiche [ 1, 2, 3, 4, 5 ]
```

### Exercice 3 : renvoyer le minimum d'un tableau
Écrivez la fonction `int min_tableau(int tableau[], int taille)` qui renvoie la plus petite valeur du tableau.

### Exercice 4 : renvoyer le maximum d'un tableau
Écrivez la fonction `int max_tableau(int tableau[], int taille)` qui renvoie la plus grande valeur du tableau.

### Exercice 5 : renvoyer le moyenne d'un tableau
Écrivez la fonction `int moy_tableau(int tableau[], int taille)` qui renvoie la moyenne des valeurs du tableau.

### Exercice 6 : compter une valeur
Écrivez la fonction `int compte_valeur(int tableau[], int taille, int valeur)` qui renvoie le nombre de fois où on retrouve l'entier `valeur` dans le tableau.

Par exemple :
```c
int tab[5] = {2, 1, 2, 4, 2};
int result = compte_valeur(tab, 5, 2);

printf("Résultat : %d\n", result); //affiche Résultat : 3
```

### Exercice  7 : échanger deux cases d'un tableau
Écrivez la fonction `void echange_cases(int tableau[], int taille, int i, int j)` qui prend la valeur de la `i`-ème case et la met dans la `j`-ème case, et prend la valeur de la `j`-ème case et la met dans la `i`-ème case.

_Attention_ : il faut vérifier que les index `i` et `j` sont bien inférieurs à `taille`.

## Exercices sur les chaînes de caractères
### Exercice 8 : taille d'une chaîne de caractère
Écrivez la fonction `int taille_string(char* string)` qui renvoie la taille de la chaîne de caractère `string`.

### Exercice 9 : nombre d'occurrence d'un caractère
Écrivez la fonction `int compter_caractère(char* string, char caractere)` qui renvoie le nombre de fois qu'on retrouve `caractere` dans `string`.

Par exemple :
```c
char* chaine = "Bonjour bonjour !";
printf("Résultat : %d", compter_caractere(chaine, 'o')); // affiche Résultat : 4
```

### Exercice 10 : comparer deux chaînes
Écrivez la fonction `int comparer_chaines(char* chaine1, char* chaine2)` qui renvoie `1` si les deux chaines sont les mêmes, `0` sinon.

### Exercice 11 : remplacer un caractère par un autre
Écrivez la fonction `char* remplacer_caractere(char* chaine, char c1, char c2)` qui parcourt les caractères de `chaine` et qui renvoie une nouvelle chaîne de caractère où tous les caractères `c1` sont remplacés par le caractère `c2`.

Par exemple :
```c
char* chaine = "Je suis une chaine."
remplacer_caractere(chaine, 'u', 'o'); // Renvoie "Je sois one chaine"
remplacer_caractere(chaine, 'i', 'a'); // Renvoie "Je suas une chaane"
```


