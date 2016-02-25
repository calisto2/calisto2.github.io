
public class Empleado {
	private String nombre;
	private int edad;
	private double sueldo;

	// Constructor por defecto;
	public Empleado() {
		
	}
	
	//Metodos get/set
	
    public String getNom() {
    	return nombre;
    }
    public void setNom(String nombre) {
    	this.nombre = nombre;
    }
    
    public int getEdad() {
    	return edad;
    }
    public void setEdad (int edad) {
    	this.edad = edad;
    }
    
    public double getSueldo() {
    	return sueldo;
    }
    public void setSueldo(double sueldo) {
    	this.sueldo = sueldo;
    }
    
    // mostrar los datos de un trabajado
    @Override
    public String toString () {
    	String datos = " ..Datos del empleado: " + nombre + ", Edad " + edad +
		" con sueldo " + sueldo;
    	return datos;  	
    }
    
} // Fin de la Clase Empleado
