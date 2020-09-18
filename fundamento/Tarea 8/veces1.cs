using System;

class program{
	public static void Main(string[] args){
		
		long num,cant = 0;
		Console.Clear();
		Console.WriteLine("Programa que dice cuantas veces aparece el numero 1");
		Console.Write("Digite el numero: ");
		num = Convert.ToInt64(Console.ReadLine());
		
		for(int x = 0; x < num.ToString().Length; x++){
			
			if(num.ToString()[x] == '1')
			cant++;
		}
				
		Console.WriteLine("El numero aparece: "+cant);		
		Console.ReadLine();
		
		
	}
	
	
	
}