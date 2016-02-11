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
	int n;
	double cant;

	
	Scanner teclado = new Scanner (System.in);
	System.out.println("Numero de  notas: ");
	n = teclado.nextInt();
	System.out.println("Introduzca las " + n + " notas ");
	int [] notas = new int[n];
	for (int i=0;i<n;i++) {
		notas[i] = teclado.nextInt();
	}
try {
	 while (salida) {
			System.out.println("1-Suma Notas ");
			System.out.println("2-Media de Notas ");
			System.out.println("3-Numero de Aprobados ");
			System.out.println("4-Mostrar notas ");
			System.out.println("5-Numero de aprobados ");
			System.out.println("6-Numero de Suspendidos ");
			System.out.println("7-Maximo ");
			System.out.println("0-Salir: ");		   
			opcion = teclado.nextInt();
			if (opcion==0) {salida = false;}
			
			
			switch (opcion) {
			case 1:
				 cant=FuncionSuma(notas, opcion);
				System.out.println("La Suma de notas es: " + cant );
				break;
			case 2:
				 cant=FuncionSuma(notas, opcion);
				System.out.println("La Media de notas es: " + cant );
				break;
			case 3:
				System.out.println("Haz elegido la ocpion 3 ");
				break;
		    case 4:   // mostrar notas
				for (int i=0;i<n;i++) {
					System.out.println( (notas[i]));
				}
				break;
			case 5:   // Aprobados
				cant = AprobadosOrSuspensos(notas, opcion);
					System.out.println(cant + " aprobados");
					break;
			case 6:   //  Suspensos
				cant = AprobadosOrSuspensos(notas, opcion);
				System.out.println(cant + " aprobados");
				break;
			case 7:   //  Maximo
					break;
			}
					// end switch
			System.out.println("Pulsa \'intro\' para continuar");
			opcion = teclado.nextInt();
		

	 }	 // end while  salida


} catch (Exception e) {}
	
teclado.close();
//-------------------------------


	

//---------------------------
}

public static double FuncionSuma(int [] notas, int opcion){
	double valor =0;
	int suma=0;
	double media=0;

	for (int i=0;i<notas.length;i++) {
		suma+= (double) notas[i];
	}
	 media = (double) suma / notas.length;
	 valor =(opcion==1)?suma:media; 
	 return valor;
}

public static int AprobadosOrSuspensos(int [] notas, int opcion){
	int valor=0;
	 int aprobados=0, suspensos=0;
		for (int i=0;i<notas.length;i++) {
				if (notas[i]>=5) {
					aprobados++;
				}
				else {
					suspensos++;
				}
		}
	  valor =(opcion==5)?aprobados:suspensos;  // opcion 5 = Aprobados
	  return valor;
}

}
