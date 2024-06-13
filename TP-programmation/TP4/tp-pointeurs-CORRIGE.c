#include <stdio.h>
#include <assert.h>

// Exercice 1
void change_valeur(int* a) {
	*a = 3;
}

// Exercice 2
void min(int a, int b, int* min) {
	if (a > b) {
		*min = b;
	} else {
		*min = a;
	}
}

// Exercice 3
void max(int a, int b, int* max) {
	if (a < b) {
		*max = b;
	} else {
		*max = a;
	}
}

// Exercice 4
void permute(int* a, int* b) {
	int tmp = *a;
	*a = *b;
	*b = tmp;
}


int main() {
	// tests fonction change_valeur
	int val = 10;
	change_valeur(&val);
	assert(val == 3);

	// tests fonction min
	int val_min;
	min(3, 9, &val_min);
	assert(val_min == 3);

	// tests fonction min
	int val_max;
	max(3, 9, &val_max);
	assert(val_max == 9);

	// tests fonction permute
	int a = 3, b = 9;
	permute(&a, &b);
	assert(a == 9);
	assert(b == 3);

	return 0;
}








