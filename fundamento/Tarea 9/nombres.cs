using System;

class program{
	public static void Main(string[] args){
		char[] nom = char[100];
		int numero = 0;
		Console.WriteLine("Colocar cuantos nombres ingresara: ");
		 numero = int.Parse(Console.ReadLine());
		for(int i = 1; i<numero; i++){
			Console.Write("Ingrese el nombre: ");
			nom = Console.ReadLine().ToCharArray();
		}
			Array.Sort(nom);
			Console.WriteLine("El orden es: ");
			foreach(char cass in nom){
				
				Console.WriteLine(+cass+" ");
			}
		Console.ReadLine();
		
		}
		
		
	}
	
	
