package Ejercicio_1;

import java.util.Scanner;

public class Fecha{
	private int dia;
	private int mes;
	private int anio;
	public Fecha(int dia, int mes, int anio) {
		this.dia=dia;
		this.mes=mes;
		this.anio=anio;
	}
	public Fecha() {
		Scanner input = new Scanner(System.in);	
		System.out.println("Ingrese el dia: ");
		int dia=input.nextInt();
		this.dia=dia;
		System.out.println("Ingrese el mes: ");
		int mes=input.nextInt();
		this.mes=mes;
		System.out.println("Ingrese el anio: ");
		int anio=input.nextInt();
		this.anio=anio;
	}
	public void mostar() {
		System.out.println(dia+" / "+mes+" / "+anio);
	}
	public void seter(int dia, int mes, int anio) {
		this.dia=dia;
		this.mes=mes;
		this.anio=anio;
	}
	public int edad() {
		int edad = 2022-anio;
		if (mes>6||(mes==6 && dia>18)){
			edad=edad-1;
		}
		return edad;
	}
}