package Ejercicio_2;

import java.util.Scanner;
import java.lang.Math;

public class Punto {
	private int x;
	private int y;
	
	public Punto() {
		Scanner input = new Scanner(System.in);
		System.out.println("Ingrese x:");
		int x= input.nextInt();
		this.x=x;
		System.out.println("Ingrese y:");
		int y= input.nextInt();
		this.y=y;
	}
	public Punto(int x, int y) {
		this.x=x;
		this.y=y;
	}
	public void mostrar() {
		System.out.println("X: "+x+"\nY: "+y);
	}
	public void setX(int x) {
		this.x=x;
	}
	public void setY(int y) {
		this.y=y;
	}
	public int getX() {
		return x;
	}
	public int getY() {
		return y;
	}
	public double distanciaP(Punto a) {
		int x1=a.getX();
		int y1=a.getY();
		double b=Math.sqrt(Math.pow(x-x1,2)+Math.pow(y-y1,2));
		return b;
	}
	public double distancia() {
		double a=Math.sqrt(Math.pow(x,2)+Math.pow(y, 2));
		return a;
	}
}
