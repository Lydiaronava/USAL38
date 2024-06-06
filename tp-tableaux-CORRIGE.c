#include <stdio.h>
#include <assert.h>


// Exercice 1
void init_tableau(int tableau[], int taille) {
	for (int i=0; i < taille; i++) {
		tableau[i] = i + 1;
	}
}


// Exercice 2
void print_tableau(int tableau[], int taille) {
	printf("[");
	for (int i=0; i < taille; i++) {
		printf(" %d", tableau[i]);
	}
	printf(" ]\n");
}


// Exercice 3
int min_tableau(int tableau[], int taille) {
	int min = 1000000;

	for (int i=0; i < taille; i++) {
		if (tableau[i] < min) {
			min = tableau[i];
		}
	}

	return min;
}


// Exercice 4
int max_tableau(int tableau[], int taille) {
	int max = -1000000;

	for (int i=0; i < taille; i++) {
		if (tableau[i] > max) {
			max = tableau[i];
		}
	}

	return max;
}


// Exercice 5
int moy_tableau(int tableau[], int taille) {
	int somme = 0;

	for (int i=0; i < taille; i++) {
		somme += tableau[i];
	}

	return somme / taille;
}


// Exercice 6
int compte_valeur(int tableau[], int taille, int valeur) {
	int cnt = 0;

	for (int i=0; i < taille; i++) {
		if (tableau[i] == valeur) {
			cnt++;
		}
	}

	return cnt;
}


// Exercice 7
void echange_cases(int tableau[], int taille, int i, int j) {
	if (i > taille || j > taille || taille < 1) return;

	int tmp = taille[i];
	taille[i] = taille[j];
	taille[j] = tmp;
}


int main() {
	int tab1[] = { 1, 2, 3, 4, 5 };
	int tab2[] = { -10, 4, 30, 4, 5 };
	int tab3[] = { 3, 2, 3, 4, 3 };

	print_tableau(tab1, 5);
	print_tableau(tab2, 5);
	print_tableau(tab3, 5);

	// test min_tableau
	assert(min_tableau(tab1, 5) == 1);
	assert(min_tableau(tab2, 5) == -10);
	assert(min_tableau(tab3, 5) == 2);

	// test max_tableau
	assert(max_tableau(tab1, 5) == 5);
	assert(max_tableau(tab2, 5) == 30);
	assert(max_tableau(tab3, 5) == 4);

	// test moy_tableau
	assert(moy_tableau(tab1, 5) == 3);
	assert(moy_tableau(tab2, 5) == 6);
	assert(moy_tableau(tab3, 5) == 3);

	// test compte_valeur
	assert(compte_valeur(tab1, 5, 1) == 1);
	assert(compte_valeur(tab2, 5, 1) == 0);
	assert(compte_valeur(tab3, 5, 3) == 3);


	return 0;
}