using System;

class program{
	public static void Main(string[] args){
		long num1,num2;
		int x;
		int cant1 =0;
		int cant2 = 0;
		int v1 = 0;
		int v2 = 0;
		double y,result;
		Console.WriteLine("programa que te dice cual de los dos numeros tiene mas numeros primos");
		Console.Write("ingrese el primer numero: ");
		num1 = Convert.ToInt64(Console.ReadLine());
		Console.Write("ingrese el segundo numero: ");
		num2 = Convert.ToInt64(Console.ReadLine());
		
		for(int w = 0; w<num1.ToString().Length; w++){
			for(int z = Convert.ToInt32(num1.ToString()[w].ToString());z>0;z++){
				
				x = Convert.ToInt32(num1.ToString()[w].ToString()) / Convert.ToInt32(z);
				y = Convert.ToDouble(num1.ToString()[w].ToString()) / Convert.ToDouble(z);
				result = y - Convert.ToDouble(x);
				if(result == 0){
				v1++;}
				
				
			
		
		} 
		if(v1 > 2){
			v1 = 0;
				cant1++;
		
		}
		
		}
		for(int w = 0; w<num2.ToString().Length; w++){
			for(int z = Convert.ToInt32(num2.ToString()[w].ToString());z>0;z++){
				
				x = Convert.ToInt32(num2.ToString()[w].ToString()) / Convert.ToInt32(z);
				y = Convert.ToDouble(num2.ToString()[w].ToString()) / Convert.ToDouble(z);
				result = y - Convert.ToDouble(x);
			if(result == 0){
			v2++;}

			
			}
		
		if(v2>2){
				v2 = 0;
				cant2++;
			}
		
		}
		if(cant1>cant2){
			Console.Write("El primero numero tiene mas digitos primos");
	
		}else {Console.Write("El segundo numero tiene mas digitos primos");
		Console.ReadLine();}
		
		
			
		
		
	}
	
	
	
}