using System;

class program{
	
	public static void Main(string[] args){
		
		double p = 0;
		double a = 0;		
		double IMC = 0;
		double am = 0;
		Console.WriteLine("Programa que te dice el IMC");
		Console.Write("Digite su altura en cm: ");
		a = int.Parse(Console.ReadLine());
		Console.Write("Digite su peso en kg: ");
		p = int.Parse(Console.ReadLine());
		am = (a/100);				
		IMC = (p/(am*am));
		
		
		
		if(IMC < 16.00){
			
			Console.Write("Usted tiene una delgadez severa: ");
			Console.WriteLine("{0:N2}",IMC);
		
		}else if(IMC >= 16.00 && IMC <= 16.99){
			
			Console.Write("Usted tiene una delgadez moderada: ");
			Console.WriteLine("{0:N2}",IMC);
		
		}else if(IMC >= 17.00 && IMC <= 18.49){
			
			Console.Write("Usted tiene una delgadez aceptable: "); 
			Console.Write("{0:N2}",IMC);
		
		}else if(IMC >= 18.50 && IMC <= 24.99){
			
			Console.Write("Usted tiene un peso normal: ");
			Console.WriteLine("{0:N2}",IMC);
		
		}else if(IMC >= 25.00 && IMC <= 29.99){
			
			Console.Write("Usted tiene sobrepeso: ");
			Console.Write("{0:N2}",IMC);
		
		}else if(IMC >= 30.00 && IMC <= 34.99){
			
			Console.Write("Usted sufre obesidad tipo 1: ");
			Console.WriteLine("{0:N2}",IMC);
	
	
		}else if(IMC >= 35.00&& IMC <= 40.00){
			
			Console.Write("Usted sufre obesidad tipo 2: ");
			Console.WriteLine("{0:N2}",IMC);
	
		}else if(IMC > 40.00){
			
			Console.Write("Usted sufre obesidad tipo 3: ");
			Console.WriteLine("{0:N2}",IMC);
		}
		
		Console.ReadLine();
	
	
	
	
	}
	
	
	
	
	
}