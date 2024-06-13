	int a = 11;
	int* ptr_a = &a;

	printf("size of int  : %lu\n", sizeof(int));
	printf("size of int* : %lu\n", sizeof(int*));

	printf("\n");

	printf("a  = %d\n", a);
	printf("&a = %p\n", &a);

	printf("\n");

	printf("ptr_a  = %p\n", ptr_a);
	printf("&ptr_a = %p\n", &ptr_a);
	printf("*ptr_a = %d\n", *ptr_a);
