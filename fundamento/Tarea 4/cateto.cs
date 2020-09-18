using System;

	class program {
		
		public static void Main (string[] args){
			
			double Ct1 = 0;
			double CtL = 0;
			double H = 0;
			
			Console.WriteLine("Programa para encontrar el cateto perdido");
			Console.Write("Digite la hipotenusa: ");
				double.TryParse(Console.ReadLine(),out H);
			Console.Write("Digite el cateto: ");
				double.TryParse(Console.ReadLine(),out Ct1);
			CtL = Math.Sqrt((H*H)-(Ct1*Ct1));
			Console.Write("El cateto perdido es: "+CtL);
			Console.ReadLine();
			
			
			
			
			
		}
		
		
		
		
		
		
		
	}