using System;
	
	class program{
		
		public static void Main (string [] args){
			
			int cash = 0;
			int guagua = 0;
			int sobran = 0;
			
			Console.WriteLine("Programa para transporte del ITLA");
			Console.Write("Digite la cantidad de dinero disponible: ");
			cash = int.Parse(Console.ReadLine());
			guagua = cash/50;
			Console.Write("Numero de viajes: "+guagua);
			Console.ReadLine();
			sobran = cash % 50;
			Console.Write("Dinero sobrante: "+sobran);
			Console.ReadLine();
			
			
			
			
			
		}
		
		
		
		
		
		
		
		
		
		
		
	}