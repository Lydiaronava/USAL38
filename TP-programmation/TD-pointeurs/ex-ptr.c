#include <stdio.h>

int main() {
	// sizeof
	printf("Nombre d'octets dans un int : %lu\n", sizeof(int));
	printf("Nombre d'octets dans un float : %lu\n", sizeof(float));
	printf("Nombre d'octets dans un char : %lu\n", sizeof(char));
	printf("Nombre d'octets dans un long int : %lu\n", sizeof(long int));
	printf("Nombre d'octets dans un short int : %lu\n", sizeof(short int));
	printf("Nombre d'octets dans un long long int : %lu\n", sizeof(long long int));

	printf("\n");

	int a;
	a = 11;

	printf("La valeur de a : %d\n", a);
	printf("La valeur de &a : %p\n", &a);

	printf("\n");

	int* ptr_a = &a;

	printf("La valeur de ptr_a : %p\n", ptr_a);
	printf("La valeur de &ptr_a : %p\n", &ptr_a);
	printf("La valeur de *ptr_a : %d\n", *ptr_a);

	printf("\n");
	
	a = 22;
	printf("La valeur de a : %d\n", a);
	printf("La valeur de *ptr_a : %d\n", *ptr_a);

	return 0;
}