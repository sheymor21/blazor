using System;

	class program{
		
			public static void Main (string[] args){
				
				int edad,año;
				Console.WriteLine("Ingrese año de fecha de nacimiento");
				año = int.Parse(Console.ReadLine());
				edad = DateTime.Today.Year-año;
				Console.WriteLine("su edad es: "+edad);
				Console.ReadLine();
				
				
				
				
				
				
				
			}
		
		
		
		
		
		
		
		
	}