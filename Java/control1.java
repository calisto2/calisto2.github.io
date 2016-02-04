package test;
import java.util.Scanner;

public class control1 {

  public static void main(String[] args) {
	int edad = 0;
	String nombre="";
	int i;
	Scanner teclado = new Scanner (System.in);
    
	System.out.println("Escribir 250 en edad para salir del programa.");
	while (edad !=250) {  
		try {			
			System.out.println("dime tu nombre: ");
			nombre= teclado.next();
			// Repetir hasta la edad  entre 1-150 
			do {      
				System.out.println("Cual es tu edad: ");
				edad = teclado.nextInt();
			} while ((edad >150 || edad <0) && edad !=250);


			
       /*  Estructura de control IF ...  IF ELSE*/
			if (edad <18) {
				System.out.println("Lo siento " + nombre + ", eres menor de edad.");
			}
			  else if (edad<=65){
				System.out.println("Muy bien, " + nombre + ", eres mayor de edad. Tienes: " + edad + " años.");
			  }
			  else {
				System.out.println(nombre + ", deberias estar jubilado. Tienes: " + edad + " años.");
			  }
        //-Fin: Estructura de repeticion FOR	.. 
			for (i=1; i<=edad;i++) {
				System.out.println(i);
			}
			
		}catch(Exception e){}	
	}	// end while	
        teclado.close();
		System.out.println("Fin programa.");	
		
  }

}
