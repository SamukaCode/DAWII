#include <stdio.h>
#include <stdlib.h>

int main()
{
    int v1, v2, i, j, h, np, nv=0,x,y;
    scanf("%d%d", &v1, &v2);
    int m[v1][v2];
    for (i = 0; i < v1; i++) {
        for (j = 0; j < v2; j++) {
            scanf("%d", &m[i][j]);
        }
    }
    scanf("%d", &np);
    for (h = 0; h < np; h++) {
        scanf("%d%d", &x, &y);
        if (m[x-1][y-1] > 0) {
            nv++;
            m[x-1][y-1]--;
        }
    }
    printf("%d", nv);
}
