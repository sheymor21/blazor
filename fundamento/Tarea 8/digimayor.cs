using System;

class program{
	public static void Main(string[] args){
		long num;
		string mayor;
		Console.WriteLine("Programa que te dice cual digito es mayor");
		Console.Write("Ingrese el numero: ");
		num = Convert.ToInt64(Console.ReadLine());
		
		mayor = num.ToString()[0].ToString();
		for(int x = 1; x<num.ToString().Length; x++){
		if(Convert.ToInt32(num.ToString()[x].ToString()) > Convert.ToInt32(mayor)){		
		mayor = num.ToString()[x].ToString();}
		}
		
		Console.WriteLine("El mayor digito es: "+mayor);
	Console.ReadLine();
	}
}