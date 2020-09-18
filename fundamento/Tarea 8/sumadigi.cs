using System;

class program{
	public static void Main (string[] args){
		int num = 0;
		int suma = 0;
		
		Console.WriteLine("Programa que determina cuánto es la suma de los dígitos de un entero");
		Console.Write("Digite el numero entero: ");
		num = int.Parse(Console.ReadLine());
		
		while(num>0){
			suma = suma+num%10;
			num = num/10;
		}			
		
		Console.WriteLine("La suma de los digitos es : "+suma);
		Console.ReadLine();
	}
	
}