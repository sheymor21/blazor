using System;

class program{
	public static void Main(string[] args){
		int n = 0;
		int z = 0;

		Console.WriteLine("programa que te dice el primer digito de un numero");
		Console.Write("Digite el numero: ");
		n = Convert.ToInt32(Console.ReadLine());

		
		while(n>0){
			z = n%10;
			n = n/10;
		}
		
		Console.WriteLine("El primer digito es: "+z);
		Console.ReadLine();
	}
	
}