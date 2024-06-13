## Exercices sur les chaînes de caractères
### Exercice 1 : taille d'une chaîne de caractère
Écrivez la fonction `int taille_string(char* string)` qui renvoie la taille de la chaîne de caractère `string`.

### Exercice 2 : nombre d'occurrence d'un caractère
Écrivez la fonction `int compter_caractère(char* string, char caractere)` qui renvoie le nombre de fois qu'on retrouve `caractere` dans `string`.

Par exemple :
```c
char* chaine = "Bonjour bonjour !";
printf("Résultat : %d", compter_caractere(chaine, 'o')); // affiche Résultat : 4
```

### Exercice 3 : remplacer un caractère par un autre
Écrivez la fonction `char* remplacer_caractere(char* chaine, char c1, char c2)` qui parcourt les caractères de `chaine` et qui renvoie une nouvelle chaîne de caractère où tous les caractères `c1` sont remplacés par le caractère `c2`.

Par exemple :
```c
char* chaine = "Je suis une chaine."
remplacer_caractere(chaine, 'u', 'o'); // Renvoie "Je sois one chaine"
remplacer_caractere(chaine, 'i', 'a'); // Renvoie "Je suas une chaane"
```

### Exercice 4 : compter les mots
Écrivez la fonction `int compte_mots(char* chaine)` qui renvoie le nombre de mots qui constituent la chaîne donnée en argument. On considère ici que l'unique séparateur est l'espace, et qu'il peut y avoir néanmoins plusieurs espaces entre deux mots. Il peut aussi y avoir un ou plusieurs espace en début et/ou fin de chaîne.


### Exercice 5 : Comparer deux chaînes 
Écrivez la fonction `int egales(char *chaine1, char *chaine2)`
qui renvoie `1` si les deux chaînes passées en arguments sont égales,
`0` sinon.


