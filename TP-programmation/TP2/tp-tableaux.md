
## Exercices sur les tableaux d'entiers
### Exercice 1 : initialiser un tableau
Écrivez la fonction `void init_tableau(int tableau[], int taille)` où `tableau` est un pointeur sur un tableau d'entier, et `taille` est un entier qui contient la taille du tableau, et qui initialise la première case du tableau à 1, la deuxième à 2, etc...

### Exercice 2 : afficher les valeurs d'un tableau
Écrivez la fonction `void print_tableau(int tableau[], int taille)` qui affiche dans la console les valeurs du tableau.

Exemple d'appel à la fonction :
```c
int tab[5] = { 1, 2, 3, 4, 5 };
print_tableau(tab, 5); // affiche [ 1 2 3 4 5 ]
```

### Exercice 3 : renvoyer le minimum d'un tableau
Écrivez la fonction `int min_tableau(int tableau[], int taille)` qui renvoie la plus petite valeur du tableau.

### Exercice 4 : renvoyer le maximum d'un tableau
Écrivez la fonction `int max_tableau(int tableau[], int taille)` qui renvoie la plus grande valeur du tableau.

### Exercice 5 : renvoyer la moyenne d'un tableau
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

_Attention_ : il faut vérifier que les index `i` et `j` sont bien inférieurs à `taille`, et que `taille` est positif. Auquel cas, on sort de la fonction (donc on ne retourne rien).
