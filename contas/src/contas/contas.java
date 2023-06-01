import java.util.Scanner;

public class contas {

    public static void main(String[] args) {
        int V,A,F,P,C;
        Scanner t = new Scanner(System.in);
        V = t.nextInt();
        A = t.nextInt();
        F = t.nextInt();
        P = t.nextInt();
        
        if (V >= A+F+P ) {
            C = 3;
        } else if (V>= A+F) {
            C = 2;
        } else if (V>= A+P) {
            C = 2;
        } else if (V>= F+P) {
            C = 2;
        } else if (V>=A || V>=F || V>=P) {
            C = 1;
        } else {
            C = 0;
        }
        System.out.println(C);
    }
    
}
