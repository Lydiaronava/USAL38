#include <stdio.h>
#include <assert.h>

void afficher_tableau_2d(int tab[3][3], int nb_lignes, int nb_colonnes) {
	for (int i=0; i < nb_lignes; i++) {
		for (int j=0; j < nb_colonnes; j++) {
			printf("%d ", tab[i][j]);
		}
		printf("\n");
	}
	printf("\n");

}

void afficher_tableau_2d_v2(int tab[3][3], int nb_lignes, int nb_colonnes) {
	for (int i=0; i < nb_lignes; i++) {
		for (int j=0; j < nb_colonnes; j++) {
			printf("%d ", tab[j][i]);
		}
		printf("\n");
	}
	printf("\n");

}


void init_tableau_2d(int tab[3][3], int nb_lignes, int nb_colonnes) {
	for (int i=0; i < nb_lignes; i++) {
		for (int j=0; j < nb_lignes; j++) {
			tab[i][j] = 0;
		}
	}
}

void additionner_matrices(int tab1[3][3], int tab2[3][3], int nb_lignes, int nb_colonnes) {
	for (int i=0; i < nb_lignes; i++) {
		for (int j=0; j < nb_lignes; j++) {
			tab1[i][j] += tab2[i][j];
		}
	}
}


void multiplier_matrices(int tab1[3][3], int tab2[3][3], int nb_lignes, int nb_colonnes) {
	for (int i=0; i < nb_lignes; i++) {
		for (int j=0; j < nb_lignes; j++) {
			tab1[i][j] *= tab2[i][j];
		}
	}
}


int somme_diagonale(int tab[3][3], int nb_lignes, int nb_colonnes) {
	int somme = 0;
	for (int i=0; i < nb_lignes; i++) {
		somme += tab[i][i];
	}

	return somme;
}


int somme_diagonale_v2(int tab[3][3], int nb_lignes, int nb_colonnes) {
	int somme = 0;
	for (int i=0; i < nb_lignes; i++) {
		somme += tab[i][nb_colonnes - i - 1];
	}

	return somme;
}

int matrices_egales(int tab1[3][3], int tab2[3][3], int nb_lignes, int nb_colonnes) {
	for (int i=0; i < nb_lignes; i++) {
		for (int j=0; j < nb_colonnes; j++) {
			if (tab1[i][j] != tab2[i][j]) return 0;
		}
	}

	return 1;
}


void somme_lignes(int tab[3][3], int tab_somme[3], int nb_lignes, int nb_colonnes) {
	for (int i=0; i < nb_lignes; i++) {
		for (int j=0; j < nb_colonnes; j++) {
			tab_somme[i] += tab[i][j];
		}
	}
}

void print_tableau(int tableau[], int taille) {
	printf("[");
	for (int i=0; i < taille; i++) {
		printf(" %d", tableau[i]);
	}
	printf(" ]\n");
}


int main() { 
	int tableau[3][3] = { 
		{1, 2, 3}, 
		{4, 5, 6}, 
		{7, 8, 9} 
	};

	// tests afficher_tableau
	afficher_tableau_2d(tableau, 3, 3); 

	afficher_tableau_2d_v2(tableau, 3, 3); 

	// test init_tableau_2d
	init_tableau_2d(tableau, 3, 3);
	afficher_tableau_2d(tableau, 3, 3); // doit afficher seulement des 0

	int t1[3][3] = { 
		{1, 2, 3}, 
		{4, 5, 6}, 
		{7, 8, 9} 
	};
	
	int t2[3][3] = { 
		{1, 1, 1}, 
		{1, 1, 1}, 
		{1, 1, 1} 
	};

	int t3[3][3] = {
		{12, 1, 2}, 
		{4, 7, 3}, 
		{5, 6, 9} 
	};

	// test additionner_matrices
	additionner_matrices(t1, t2, 3, 3);
	afficher_tableau_2d(t1, 3, 3);

	// test multiplier_matrices
	additionner_matrices(t2, t2, 3, 3); // t2 devient une matrice avec que des 2

	multiplier_matrices(t1, t2, 3, 3);
	afficher_tableau_2d(t1, 3, 3);

	// test somme_diagonale
	assert(somme_diagonale(t1, 3, 3) == 36);
	assert(somme_diagonale(t3, 3, 3) == 28);
	assert(somme_diagonale_v2(t3, 3, 3) == 14);
	assert(somme_diagonale_v2(t2, 3, 3) == 6);

	printf("Somme diagonale de t1 : %d\n", somme_diagonale(t1, 3, 3));
	printf("Somme diagonale de t3 : %d\n", somme_diagonale(t3, 3, 3));
	printf("Somme 2e diagonale de t1 : %d\n", somme_diagonale_v2(t2, 3, 3));
	printf("Somme 2e diagonale de t3 : %d\n", somme_diagonale_v2(t3, 3, 3));


	// test matrices_egales
	assert(matrices_egales(t1, t1, 3, 3));
	assert(! matrices_egales(t1, t2, 3, 3));

	// test somme_lignes
	int t[] = { 0, 0, 0 };

	somme_lignes(t1, t, 3, 3);
	print_tableau(t, 3); 

	assert(t[0] == 18);
	assert(t[1] == 36);
	assert(t[2] == 54);

	return 0; 

}












