import java.util.Scanner;

public class leilao {

    public static void main(String[] args) {
        Scanner t = new Scanner(System.in);
        int n,vml=0,x;
        String nml="",y;
        n = t.nextInt();
        for (int i=0;i<n;i++) {
            y = t.next();
            x = t.nextInt();
            if (i == 0) {
                nml = y;
                vml = x;
            } else {
                if (x > vml) {
                    vml = x;
                    nml = y;
                }
            }
            t.nextLine();
        }
        System.out.println(nml);
        System.out.println(vml);
    }
    
}
