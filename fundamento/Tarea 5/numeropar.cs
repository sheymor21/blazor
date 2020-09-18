using System;

class program{
	
	public static void Main(string[] args){
		
		int a = 0;
		
		Console.WriteLine("Programa que te dice si el numero es par o impar");
		Console.Write("Digite el numero: ");
		 a = int.Parse (Console.ReadLine());
		
		if(a % 2 == 0){
			
			
			    Console.Write( "es par");
		}else{   
		
			Console.Write("es impar");
		}
	
		Console.ReadLine();
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
}