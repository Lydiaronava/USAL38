#include <assert.h>
#include <stdio.h>

#define TARIF_NORMAL 20
#define TARIF_ETU_MOINS26 10// étudiant moins de 26
#define TARIF_ETU_PLUS26 19 // étudiant plus de 26
#define TARIF_MOINS26 15 // non étudiant
#define TARIF_MOINS15 8


// Exercice 1
int addition(int a, int b) {
	return a + b;
}


// Exercice 2
int minimum(int a, int b) {
	if (a < b) {
		return a;
	}
	return b;
}


// Exercice 2bis
int maximum(int a, int b) {
	if (a > b) {
		return a;
	}
	return b;
}


// Exercice 3
int signe_somme(int a, int b) {
	if (a + b > 0) {
		return 1;
	} else {
		return 0;
	}
}


// Exercice 4
int est_dans_intervalle(int nombre, int i1, int i2) {
	if (nombre > i1 && nombre < i2) {
		return 1;
	} 
	return 0;

}


// Exercice 5
int maximum_3_val(int a, int b, int c) {
	if ((a > b) && (a > c)) {
		return a;
	} else {
		if (b > c) {
			return b;
		} else {
			return c;
		}
	}
}


// Exercice 6
int signe_somme_v2(int a, int b) {
	if (a > -b) {
		return 1;
	}
	if (a < -b) {
		return -1;
	}
	return 0;
}


// Exercice 7
int tarif_musee(int age, int est_etudiant, int jour) {
	if (jour == 4) return TARIF_MOINS15;

	float tarif;

	if (est_etudiant) {
		if (age > 26) {
			tarif = TARIF_ETU_PLUS26;
		} else {
			tarif = TARIF_ETU_MOINS26;
		}
	} else {
		if (age < 15) {
			tarif = TARIF_MOINS15;
		} else if (age < 26) {
			tarif = TARIF_MOINS26;
		} else {
			tarif = TARIF_NORMAL;
		}
	}

	if (jour > 5) {
		return tarif - 2;
	}
	return tarif;
}


// Exercice 8
int somme_entiers(int n) {
	int somme = 0;

	for (int i=1; i <= n; i++) {
		somme += i;
	}

	return somme;
}


// Exercice 9
void dessiner_etoiles() {
	for (int i=1; i <= 10; i++) {
		for (int j=0; j < i; j++) {
			printf("*");
		}
		printf("\n");
	}
}


// Exercice 10
void decompose_billet_pieces(int valeur) {
	int tmp = valeur;
	int nb_5 = 0, nb_2 = 0, nb_1 = 0;

	while (tmp >= 5) {
		nb_5 = tmp / 5;
		tmp = tmp % 5;
	}

	while (tmp >= 2) {
		nb_2 = tmp / 2;
		tmp = tmp % 2;
	}

	nb_1 = tmp;

	printf("%d=%d*5 euros + %d*2 euros + %d*1 euro\n", valeur, nb_5, nb_2, nb_1);
}

int main() {
	// tests addition
	assert(addition(1, 3) == 4);
	assert(addition(-1, 3) == 2);
	assert(addition(-1, -3) == -4);

	// tests minimum
	assert(minimum(1, 3) == 1);
	assert(minimum(10, 3) == 3);
	assert(minimum(-1, 3) == -1);

	// tests maximum
	assert(maximum(1, 3) == 3);
	assert(maximum(10, 3) == 10);
	assert(maximum(-1, 3) == 3);

	// test signe_somme
	assert(signe_somme(1, -2) == 0);
	assert(signe_somme(1, 2) == 1);
	assert(signe_somme(-1, -2) == 0);
	assert(signe_somme(1, 2) == 1);

	// tests est_dans_intervalle
	assert(est_dans_intervalle(1, 2, 4) == 0);
	assert(est_dans_intervalle(3, 2, 4) == 1);
	assert(est_dans_intervalle(5, 2, 4) == 0);

	// test signe_somme_v2
	assert(signe_somme_v2(1, 1) == 1);
	assert(signe_somme_v2(1, -1) == 0);
	assert(signe_somme_v2(-1, -1) == -1);

	// tests tarif_musee
	assert(tarif_musee(5, 0, 2) == TARIF_MOINS15);
	assert(tarif_musee(25, 1, 3) == TARIF_ETU_MOINS26);
	assert(tarif_musee(25, 0, 3) == TARIF_MOINS26);
	assert(tarif_musee(45, 1, 5) == TARIF_ETU_PLUS26);
	assert(tarif_musee(25, 0, 6) == TARIF_MOINS26-2);
	assert(tarif_musee(5, 0, 2) == TARIF_MOINS15);

	// tests somme_entiers
	assert(somme_entiers(3) == 6);
	assert(somme_entiers(5) == 15);
	assert(somme_entiers(10) == 55);


	// tests dessiner_etoiles
	dessiner_etoiles();

	// tests decompose_billet_piece
	decompose_billet_pieces(54);
	decompose_billet_pieces(3);
}










