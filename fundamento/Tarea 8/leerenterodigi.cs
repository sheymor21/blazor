using System;

class Program{
	public static void Main(string[] args){
		
		Console.WriteLine("Programa que te dice cuantos digitos tiene un numero");
		Console.Write("ingrese numero: ");
		int num = int.Parse(Console.ReadLine());
		int cont = 1;
		int control = 10;
		
		while(control<=num){
			cont = cont+1;
			control = control*10;
			
		}
		Console.WriteLine("Tiene "+ cont+" digitos");
		Console.ReadLine();
		
	}
	
	
	
}