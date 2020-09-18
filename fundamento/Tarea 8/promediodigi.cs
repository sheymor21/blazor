using System;

class program{
	public static void Main(string[] args){
		int num = 0;
		int suma = 0;
		int control = 10;
		int cant = 1;
		int result = 0;
		Console.WriteLine("Programa que determina cuánto es la suma de los dígitos de un entero");
		Console.Write("Digite el numero entero: ");
		num = int.Parse(Console.ReadLine());
				
		while(control<num){
			cant = cant+1;
			control = control*10;
		}
		while(num>0){
			suma = suma+num%10;
			num = num/10;
			
		}result = suma/cant;
		
		Console.WriteLine("La suma de los digitos es : "+result);
		Console.ReadLine();
		
	}
	
	
	
	
}