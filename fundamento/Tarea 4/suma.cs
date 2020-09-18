using System;

	class suma { 
	
		public static void Main(string[] args){
				
				int Num1 = 0;
				int Num2 = 0;
				int resultado = 0;
				Console.WriteLine("Programa que suma dos numeros");
				Console.Write("Digite el primer numero:");
				Num1 = int.Parse(Console.ReadLine());
				Console.Write("digite el segundo numero:");
				Num2 = int.Parse(Console.ReadLine());
				resultado = Num1 + Num2;
				Console.WriteLine("el Resultado es "+resultado);
				Console.ReadLine();
			
			
			
		}
	
	
	
	
	
	
	}