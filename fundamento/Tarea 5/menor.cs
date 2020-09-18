using System;

class program{
	
	public static void Main(string[] args){
		
		int Num1 = 0;
		int Num2 = 0;
		int Num3 = 0;
		int Num4 = 0;
		int menor = 0;
		string mensaje = "El menor numero es: ";
		
		Console.Clear();
		Console.WriteLine("Programa que te dice cual es el menor numero");
		Console.Write("Digite el primer numero: ");
		Num1 = int.Parse(Console.ReadLine());
		Console.Write("Digite el segundo numero: ");
		Num2 = int.Parse(Console.ReadLine());
		Console.Write("Digite el tercer numero: ");
		Num3 = int.Parse(Console.ReadLine());
		Console.Write("Digite el cuarto numero: ");
		Num4 = int.Parse(Console.ReadLine());
		
			if(Num1 < Num2 && Num1 < Num3 && Num1 < Num4){ 
				menor = Num1;
				}	
			else if(Num2 < Num1 && Num2 < Num3 && Num2 < Num4){
					
					menor = Num2;
					
					
					} else if (Num3 < Num1 && Num3 < Num2 && Num3 < Num4){
									
									menor = Num3;
										
								}	else if(Num4 < Num1 && Num4 < Num2 && Num4 < Num3){
													menor = Num4;}
									
										
										else { mensaje = "el menor numero se repite ";} 
										
											
											
											
											
						
						
								
							
							
							
							
				
			
			Console.WriteLine(mensaje+menor);
			Console.ReadLine();
			
			
			
				
				
				
				
				
				}	
								
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
