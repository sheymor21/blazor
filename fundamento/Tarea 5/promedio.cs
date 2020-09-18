using System;
	
	
	class promedio{
		
		public static void Main (string[] args){
			
			double not1 = 0;
			double not2 = 0;
			double not3 = 0;
			double not4 = 0;
			double Promedio = 0;
			
			Console.WriteLine("programa para sacar el Promedio de notas");
			Console.Write("Digite la primera nota: ");
			not1 = double.Parse(Console.ReadLine());
			Console.Write("Digite la segunda nota: ");
			not2 = double.Parse(Console.ReadLine());
			Console.Write("Digite la tercera nota: ");
			not3 = double.Parse(Console.ReadLine());
			Console.Write("Digite la cuarta nota: ");
			not4 = double.Parse(Console.ReadLine());
			Promedio = (not1 + not2 + not3 + not4)/4;
			Console.WriteLine("El promedio es: "+Promedio);
			Console.ReadLine();
			
			
		}
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	


