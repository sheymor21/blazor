using System;

class program{
	public static void Main(string[] args){
		long num,result = 0;
		Console.WriteLine("Programa que determina la suma los digitos pares de un entero");
		Console.Write("Digite el numero: ");
		num = Convert.ToInt64(Console.ReadLine());
		
		for(int x=0; x<num.ToString().Length; x++){
			if(Convert.ToInt32(num.ToString()[x].ToString()) % 2 ==0){
			result += Convert.ToInt64(num.ToString()[x].ToString());
		}
		}
		Console.WriteLine("La suma del digitos pares es: "+result);
		Console.ReadLine();
	}
	
	
}