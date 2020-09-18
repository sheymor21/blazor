using System;

class program{

		public static void Main(string[] args){
			
			int Num1 = 0;
			int Num2 = 0;
			int Mayor = 0;
			string Mensaje = "El numero mayor es : ";
			Console.Clear();
			Console.WriteLine("Programa que te dice cual de los numeros es mayor");
			Console.Write("Digite el primer numero: ");
			Num1 = int.Parse(Console.ReadLine());
			Console.Write("Digite el segundo numero: ");
			Num2 = int.Parse(Console.ReadLine());
			
				if(Num1 > Num2){
					
				Mayor = Num1;}
				
				else if (Num1 < Num2){
				
				Mayor = Num2;} 
				
				else{
							
				Mensaje = "Ambos numeros son iguales  ";}
				
				
				
			Console.WriteLine(Mensaje+Mayor);
			Console.ReadLine();
			
			
			
			
			
			
		}
}

