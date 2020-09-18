using System;

class program{
	
	public static void Main(string[] args){
		int a = 0;
		int f = 0;
		int j = 0;
		Console.WriteLine("Programa que te dice si un numero es multiplo de 5");
		Console.Write("Digite el numero: ");
		a = int.Parse(Console.ReadLine());		
		f = (a/5);
		j = a % 5;
		if(j <= 0){
			Console.WriteLine("Es multiplo");
			
		}else {Console.WriteLine("No es multiplo");}
		
		Console.ReadLine();
	}
	
}