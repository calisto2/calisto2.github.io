import java.util.Scanner;

public class GestionEmpleado {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
   int n;
   boolean salida = true;
   int opcion;
      
   Scanner teclado = new Scanner (System.in);
   System.out.println("Numero de empleados a Gestionar: ");
   n = teclado.nextInt();
   
   String [] noms = new String[n];
   int    [] edades = new int[n];
   double [] sueldos = new double[n];   	
		
	try {		
		   for (int i=0; i<n;i++) {
			  System.out.println("Nombre del empleado " + (i+1) + " : ");
			  noms [i] = teclado.next();
			  do {
				  System.out.println("Edad: ");
				  edades [i] = teclado.nextInt();
			  } while ((edades[i] > 67) || (edades[i] < 16));

			  do {
				  System.out.println("Sueldo: ");
				  sueldos [i] = teclado.nextDouble();
			  } while ((sueldos[i]>3000000) || sueldos[i]<1000);		   
		   }  // end for
		   
		while (salida) {
			System.out.println("0-Salir ");
			System.out.println("1-Mostrar empleado ");
			opcion = teclado.nextInt();
			//if (opcion==0) {salida = false;}
			
			switch (opcion) {
			case 0:
				salida = false;
			    break;
			case 1:
				System.out.println("Num de empleado a mostrar");
				n = teclado.nextInt();
				System.out.println("empleado: " + noms[n] + " Edad " + edades[n] +
						" con Sueldo " + sueldos[n]);
				break;
				
				
			}
		
		}	// while salida
		
				
	 }catch (Exception e) {};
		
	 
	}
		
	

}
