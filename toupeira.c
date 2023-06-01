#include <stdio.h>
#include <stdlib.h>

int main()
{
    int nt,nc,ns,sv,i,j,k;
    int x,y=0,z=1;
    scanf("%d%d", &nt, &nc);
    int it[nc][2];
    for (i = 0; i < nc; i++) {
        for(j = 0; j < 2; j++) {
            scanf("%d", it[i,j]);
        }
    }
    scanf("%d", &ns);
    for (i = 0; i < ns; i++) {
        scanf("%d", &x);
        int vet[x];
        for (j = 0; j < x; j++) {
            scanf("%d", &vet[j]);
        }
        for (j = 0; j < nc; j++) {
            if (((vet[y] == it[j][0]) && (vet[z] == it[j][1])) || ((vet[y] == it[j][1]) && (vet[z] == it[j][0]) )) {
                sv++;
            }
            y++;
            z++;
        }
    }
    printf("%d", sv);
}
