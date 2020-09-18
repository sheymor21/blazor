using System;

	class calculo{
		
		public static void Main (){
			
		double a = 0;
		double b = 0;
		double c = 0;
		double x = 0;
		
			Console.WriteLine("programa para Linealizar el ejercicio 11");
			Console.Write("Digite el valor de a: ");
			double.TryParse(Console.ReadLine(),out a);
			Console.Write("Digite el valor de b: ");
			 double.TryParse(Console.ReadLine(),out b);
			Console.Write("Digite el valor de C: ");
			 double.TryParse(Console.ReadLine(), out c);
			x = (a+b/c)/(a/b+c);
			Console.Write("El valor de X es: "+x);	
			Console.ReadLine();
			
			
			
		}
		
		
		
		
		
		
	}