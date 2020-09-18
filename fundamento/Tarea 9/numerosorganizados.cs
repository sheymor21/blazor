using System;

class program{
	public static void Main(string[] args){
		int[] num = new int[10];
		Console.WriteLine("Programa que te acepta 10 numeros y te los ordena de mayor a menor y de menor a mayor");
		for(int x=0; x<num.Length; x++){
			Console.Write("Digite un numero para la posicion {0}: ",x+1);
			num[x] = int.Parse(Console.ReadLine());
		}
		
		Array.Sort(num);
		Console.WriteLine("De menor a mayor");
		for(int i=0; i<num.Length; i++){
	
			Console.WriteLine(num[i]);
		}Console.WriteLine("De mayor a menor");
		Array.Reverse(num);
		for(int j=0; j<num.Length; j++){		
			Console.WriteLine(num[j]);
		}		
		Console.ReadLine();
	
	}
	
}