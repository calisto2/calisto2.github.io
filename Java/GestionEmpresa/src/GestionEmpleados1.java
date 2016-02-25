import java.util.Scanner;
// http://puntocomnoesunlenguaje.blogspot.com.es/2015/10/ejemplo-clase-java-con-atributo-static.html
public class GestionEmpleados1 {
    static    int n;
    static  int indice =1;
    final static int MAXIMO_EMPLEADOS = 20;
    static Empleado[] empleados = new Empleado[MAXIMO_EMPLEADOS];
    static Empleado e;
    static Scanner teclado = new Scanner (System.in);

	public static void main(String[] args) {
		// TODO Auto-generated method stub

   boolean salida = true;
   int opcion;
      

   System.out.println("Numero de empleados a Gestionar: ");
   n = teclado.nextInt();
   

   
   // Empleados iniciales
   e = new Empleado();
   e.setNom("Pepe");
   e.setEdad(44);
   e.setSueldo(34350.0);
   empleados [0] = e; //se a�ade el empleado al array
   e = new Empleado();
   e.setNom("Carlos");
   e.setEdad(31);
   e.setSueldo(24350.0);
   empleados [1] = e; //se a�ade el empleado al array
   
   // Empleado[] empleados = new Empleado[n+2];
   String nombre;
   int edad;
   double sueldo;
   
	//--------	
	try {		
		   for (int i=0; i<n;i++) { // Solicitamos la entrada de los empleado   
			  System.out.println("Nombre del empleado " + (i+2) + " : ");
			  nombre = teclado.next();
			  do {
				  System.out.println("Edad: ");
				  edad = teclado.nextInt();
			  } while ((edad > 67) || (edad < 16));

			  do {
				  System.out.println("Sueldo: ");
				  sueldo = teclado.nextDouble();
			  } while ((sueldo >3000000) || sueldo <1000);	
			  
			   e = new Empleado();  //crear una nueva instancia de empleado
			   e.setNom(nombre);
			   e.setEdad(edad);
			   e.setSueldo(sueldo);
			   empleados [i+2] = e; //se a�ade el empleado al array
			   indice = indice + 1;
		   }  // end for
	

		   
		while (salida) {
			System.out.println("0-Salir ");
			System.out.println("1-Mostrar empleado ");
			System.out.println("2-Edad Media de la plantilla ");
			System.out.println("3-sueldo Medio de la plantilla ");
			System.out.println("4-Total sueldos ");
			System.out.println("5 Datos del Empleado que cobra m�s ");
			System.out.println("6- Datos del empleado m�s viejos");
			
			opcion = teclado.nextInt();
			//if (opcion==0) {salida = false;}
			
			switch (opcion) {
			case 0:
				salida = false;
			    break;
			case 1:
				System.out.println("Num de empleado a mostrar");
				n = teclado.nextInt();
				 System.out.println(empleados[n]);
				break;
			case 2:
				double media=0;
				int cant=0;
				for (int i=0; i<empleados.length;i++) {
					cant = cant + empleados[i].getEdad();
				}
				media = (double) cant / empleados.length;
				System.out.println("La media de edad de la plantilla es: " + media);
				break;
			case 3:	
				double media1=0;
				for (int i=0; i<empleados.length;i++) {
					media1 =  media1 + empleados[i].getSueldo();
				}
				media1 = media1 / empleados.length;
				System.out.println("La media de edad de la plantilla es: " + media1);
				break;
			case 4:
				double suma=0;
				for (int i=0; i<empleados.length;i++) {
					suma = suma + empleados[i].getSueldo();
				}
				System.out.println("el importe total de sueldos es: " + suma);
				break;
			case 5:
			    e = SueldoAlto();	
	            System.out.println("\n\nEl que m�s cobra:" + e.toString() );
				 
				break;
				
			}
		
		}	// while salida
		
				
	 }catch (Exception g) {};
	
	 teclado.close();
	 
	}
		
public static Empleado SueldoAlto() {
	double sueldoMasAlto=0;
	Empleado mayor = empleados[0];
	for (int i=0; i<=indice;i++) {
		if (empleados[i].getSueldo()>sueldoMasAlto) {
			sueldoMasAlto = empleados[i].getSueldo();
			e.setNom(empleados[i].getNom());
			e.setSueldo(empleados[i].getSueldo());
			e.setEdad(empleados[i].getEdad());
			mayor = empleados[i];
			
		}
	}	
	return mayor;
	//System.out.println( "El sueldo m�s alto es de : " + sueldoMasAlto +  e.toString()); 
}

}
/*  http://puntocomnoesunlenguaje.blogspot.com.es/2015/10/ejemplo-clase-java-con-atributo-static.html  */