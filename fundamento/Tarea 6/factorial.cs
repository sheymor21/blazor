using System;

class Program{
        
	public static void Main(string[] args){
		int num, resul = 1; 
		Console.Clear();
		Console.WriteLine("Programa que te da el factorial de un numero");
		Console.Write("Digite el numero: "); 
		num = int.Parse(Console.ReadLine());
           
		for (int i = 1; i <= num; i++){
                
				resul = resul * i;  
            }
        Console.WriteLine("Su factorial es: "+resul);
        Console.ReadLine(); 
        
		
		
		}
    }
