using System;

class program{
	
	public static void Main (string[] args){
		
		double nota = 0;
		
		Console.WriteLine("Programa que te dice el EQ del estudiante");
		Console.Write("Digite la nota: ");
		nota = double.Parse(Console.ReadLine());
		
		if(nota < 70 ){
			
			Console.Write("El estudiante tiene una F");
			
		} else if(nota >= 70 && nota < 80){
			
			Console.Write("El estudiante tiene una C");
			
			}else if(nota >= 80 && nota < 90){
				
				Console.Write("El estudiante tiene una B");
				
				}else if (nota >= 90 && nota <=Programa que acepte 4 notas y calcule el pro 100){
					
					Console.Write("El estudiante tiene una A");
				}else {
					
					Console.WriteLine("el valor no es valido");
					
				} 
					Console.ReadLine();
		
		
		
	}
	
	
	
	
	
	
}