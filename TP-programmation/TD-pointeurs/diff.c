#include <stdio.h>

int diff(int a, int b) {
	int x = a - b;
	return x;
}

int calcul(int a, int b) {
	int x;

	if (a > b) {
		x = diff(a, b);
	} 
	else {
		x = diff(b, a);
	}
	return x;
}

int main() {
	int res;

	res = calcul(7, 2);
	printf("Le premier resultat du calcul est %d.\n", res);

	res = calcul(-15, 3);  
	printf("Le deuxieme resultat du calcul est %d.\n", res);
	
	return 0;
}