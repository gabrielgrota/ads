#include <stdio.h>
#include <stdlib.h>

int main()
{
    char titulo[50];
    char autor[50];
    char categoria[50];
    int identificador;

    printf("Escreva o titulo: ");
    scanf("%c", &titulo);

    printf("Escreva o autor: ");
    scanf("%c", &autor);

    printf("Escreva a categoria: ");
    scanf("%c", &categoria);

    printf("Escreva o identificador: ");
    scanf("%d", &identificador);

    printf("Titulo: %s\n Autor: %s\n Categoria: %s\n ID: %d\n", titulo, autor, categoria, identificador);

    return 0;
}