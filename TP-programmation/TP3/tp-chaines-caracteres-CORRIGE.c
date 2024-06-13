#include <stdio.h>
#include <assert.h>


// Exercice 1
int taille_string(char* string) {
	int i = 0;

	while (string[i] != '\0') {
		i++;
	}

	return i;
}


// Exercice 2
int compter_caractere(char* string, char cr) {
	int i = 0, cpt = 0;

	while (string[i] != '\0') {
		if (string[i] == cr) {
			cpt++;
		}
		i++;
	}

	return cpt;
}


// Exercice 3
char* remplacer_caracteres(char* chaine, char c1, char c2) {
	int i = 0;

	while (chaine[i] != '\0') {
		if (chaine[i] == c1) {
			chaine[i] = c2;
		}
		
		i++;
	}

	return chaine;
}


// Exercice 4
int compte_mots(char* chaine) {
	int nb = 0;
	int i = 0; 


	while (chaine[i] != '\0') { 
		while (chaine[i] == ' ') {
			i++; 
		}

		if (chaine[i] != '\0') { 
			nb++;

			while ((chaine[i] != '\0') && (chaine[i] != ' ')) { 
				i++;
			} 
		}
	}

	return nb;
}


// Exercice 5
int egales(char* chaine1, char* chaine2) {
	int i = 0;
	while ((chaine1[i] != '\0') && (chaine2[i] != '\0') && (chaine1[i] == chaine2[i])) {
		i++; 
	}

	if (chaine1[i] == chaine2[i]) { 
		return 1;
	}

	return 0; 
}


int main() {
	// tests fonction taille_string
	char chaine1[] = "Bonjour";
	assert(taille_string(chaine1) == 7);
	assert(taille_string("aaaaaaaaaa") == 10);
	assert(taille_string("") == 0);



	// tests fonction compter_caracteres
	assert(compter_caractere(chaine1, 'o') == 2);
	assert(compter_caractere("aaaaaaaaaa", 'a') == 10);
	assert(compter_caractere("", 'o') == 0);


	// tests fonction remplacer_caracteres
	printf("Chaîne de caractère avant appel à remplacer_caracteres : %s\n", chaine1);
	remplacer_caracteres(chaine1, 'o', 'a');
	printf("Chaîne de caractère après appel à remplacer_caracteres : %s\n", chaine1);


	// tests fonction compte_mots
	assert(compte_mots("Je suis une phrase") == 4);
	assert(compte_mots("Moi aussi je suis une phrase mais plus longue") == 9);
	assert(compte_mots(" je suis   une     phrase avec        beaucoup      d'espaces     ") == 7);

	// tests fonction egales
	assert(egales(chaine1, "Banjaur"));
	assert(! egales(chaine1, "Bonjour"));
}


