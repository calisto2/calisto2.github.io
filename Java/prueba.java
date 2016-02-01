package test;
import java.util.Scanner;

public class prueba {
	public static void main(String[] args)
	  {
	   System.out.print ("El primer programa en Java.\n\n");
	   // Declaremos variables
	   int edad;
	   String nombre;  
	   int EsperanzaVida = 89;
	   
	   // Creamos una instancia de Scanner
	   Scanner in = new Scanner (System.in);
	   	  
	   // Preguntamos al user
	   System.out.println("Cual es tu nombre: ");
	   nombre = in.next();
	   System.out.println ("Cual es tu edad: ");
	   edad = in.nextInt();
	   EsperanzaVida = EsperanzaVida - edad; 
	   
	   System.out.printf("Te llamas  %s, Tienes %d años y tu esperanza de vida es %d.\n\n",   nombre, edad, EsperanzaVida);	   
   
	}

}
