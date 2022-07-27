package Ejercicio_1;

import java.util.Scanner;

public class Persona{
	private int DNI;
	private String Nombre;
	private String Prim_Ap;
	private String Segun_Ap;
	private int edad;
	private Fecha nacimiento;
	private String email;
	
	public Persona() {
		Scanner input = new Scanner(System.in);		
		System.out.println("Ingrese DNI: ");
		int DNI=input.nextInt();
		this.DNI=DNI;
		System.out.println("Ingrese Nombre: ");
		String Nombre=input.next();
		this.Nombre=Nombre;
		System.out.println("Ingrese Primer Apellido: ");
		String Prim_Ap=input.next();
		this.Prim_Ap=Prim_Ap;
		System.out.println("Ingrese Segundo Apellido: ");
		String Segun_Ap=input.next();
		this.Segun_Ap=Segun_Ap;
		System.out.println("Ingrese su edad: ");
		int edad=input.nextInt();
		this.edad=edad;
		System.out.println("Ingrese su Fecha de Nacimiento: ");
		Fecha nacimiento=new Fecha();
		this.nacimiento=nacimiento;
		while (nacimiento.edad()!=edad) {
			System.out.println("La fecha de nacimiento no coindide con la edad: ");	
			System.out.println("Ingrese el dia: ");
			int dia=input.nextInt();
			System.out.println("Ingrese el mes: ");
			int mes=input.nextInt();
			System.out.println("Ingrese el anio: ");
			int anio=input.nextInt();
			nacimiento.seter(dia, mes, anio);
		}
		System.out.println("Ingrese email: ");
		String email=input.next();
		this.email=email;
	}
	public void mostrar_P() {
		System.out.println("Persona igresada con exito: ");
		System.out.println("Bienvenido "+ Nombre+", "+Prim_Ap+", tienes "+edad+" anios.\nTu email es: "+email);
	}
}
 