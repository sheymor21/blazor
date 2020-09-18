using System;

	class program {
		
		public static void Main (string[] args){
			
			double Ct1 = 0;
			double Ct2 = 0;
			double H = 0;
			Console.Clear();
			Console.WriteLine("Programa que busca la hipotenusa");
			Console.Write("Digite el valor del primer cateto: ");
			Ct1 = double.Parse(Console.ReadLine());
			Console.Write("Digite el valor del segundo cateto: ");
			Ct2 = double.Parse(Console.ReadLine());
			H = Math.Sqrt ((Ct1*Ct1)+(Ct2*Ct2));
			Console.Write("La hipotenusa es: "+H);
			Console.ReadLine();
			
			
			
			
			
		}
		
		
		
		
		
		
		
		
		
	}