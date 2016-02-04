package test;
import java.util.Scanner;

public class ControlMenu {

public static void main(String[] args) {
    int Nalumnos;
	Mostrar_Menu();

System.out.println("Fin programa.");	
		

}
//---------------------------------
public static void Mostrar_Menu() {
	int opcion;
	boolean salida = true ;
	
	Scanner teclado = new Scanner (System.in);
try {
	 while (salida) {
		 
			System.out.println("1-Suma Notas: ");
			System.out.println("2-Media de Notas: ");
			System.out.println("3-Numero de Aprobados: ");
			System.out.println("0-Salir: ");		   
			opcion = teclado.nextInt();
			if (opcion==0) {salida = false;}
			
			
			switch (opcion) {
			case 1:
				System.out.println("Haz elegido la ocpion 1 ");
				break;
			case 2:
				System.out.println("Haz elegido la ocpion 2 ");
				break;
			case 3:
				System.out.println("Haz elegido la ocpion 3 ");
				break;
			}
			System.out.println("Pulsa \'intro\' para continuar");
			opcion = teclado.nextInt();
		

		 
	 } 
	
} catch (Exception e) {}
	
teclado.close();
//-------------------------------

public  DatosIniciales {
	n
	
}
//---------------------------
}
}
