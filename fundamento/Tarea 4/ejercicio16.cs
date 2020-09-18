using System;

	class calculo{
		
		public static void Main (){
			
		double a = 0;
		double b = 0;
		double c = 0;
		double d = 0;
		double x = 0;
		
			Console.WriteLine("programa para Linealizar el ejercicio 16");
			Console.Write("Digite el valor de a: ");
			double.TryParse(Console.ReadLine(),out a);
			Console.Write("Digite el valor de b: ");
			 double.TryParse(Console.ReadLine(),out b);
			Console.Write("Digite el valor de C: ");
			 double.TryParse(Console.ReadLine(), out c);
			Console.Write("Digite el valor de d: ");
			 double.TryParse(Console.ReadLine(), out d);			
			x = (a+b+c/(d*a))/(a+b*c/d);
			Console.Write("El valor de X es: "+x);	
			Console.ReadLine();
			
			
			
		}
		
		
		
		
		
		
	}