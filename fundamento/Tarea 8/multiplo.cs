using System;

class program{
	public static void Main(string[] args){
		int n=0;

		int z; 
		Console.WriteLine("Programa que te dice los multiplos de un numero");
		Console.Write("ingrese el numero: ");
		n = int.Parse(Console.ReadLine());
		z = n;
		while(n<200){
			n = n+z;
			Console.WriteLine(n);
		}
		Console.ReadLine();
			
		
	
		
		
	}
}