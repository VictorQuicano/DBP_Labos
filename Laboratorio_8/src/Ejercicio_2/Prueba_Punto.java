package Ejercicio_2;

public class Prueba_Punto {
	public static void main(String[]args) {
		Punto p1=new Punto(4,3);
		System.out.println("Punto #1");
		p1.mostrar();
		System.out.println("Punto #2");
		Punto p2=new Punto();
		p2.mostrar();
		System.out.println("Distancia entre p1 a p2: "+p1.distanciaP(p2));
		System.out.println("Distancia entre p1 y el origen: "+p1.distancia());	
	}
}
