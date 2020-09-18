using System;

	class program{
		
		public static void Main (string[] args){
	
			double num = 0;
			double mitad = 0;
			double doble = 0;
				Console.WriteLine("Programa que dice la mitad y el doble de un numero");
				Console.Write("Digite el numero: ");
				num = double.Parse(Console.ReadLine());
				mitad = num/2;
				doble = num*2;
				Console.Write("La mitad es: "+mitad);
				Console.ReadLine();
				Console.Write("EL doble es: "+doble);
				Console.ReadLine();
			
			
			
			
		}
		
		
		
		
		
		
		
		
		
		
		
		
	}