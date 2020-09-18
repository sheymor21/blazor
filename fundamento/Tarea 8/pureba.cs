using System;
class program{
	public static void Main(string[] args){
		int dig,n;
		Console.WriteLine("programa que te dice el primer digito de un numero");
		Console.Write("Digite el numero: ");
		n = Convert.ToInt32(Console.ReadLine());
		
		
		dig = n-(n/10)*10;

		
		Console.WriteLine("El primer digito es: "+dig);
		Console.ReadLine();
	}
	
}