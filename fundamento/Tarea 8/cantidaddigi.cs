using System; 

class program{
	public static void Main(string[]  args){
		int control = 10;
		int control2 = 10;
		int cant1 = 1;
		int cant2 = 1;
		int x = 0;
		int z = 0;
		Console.WriteLine("Programa que te dice cual de las dos cantidades tiene mas digitos");
		Console.Write("ingrese el primer numero: ");
		x = int.Parse(Console.ReadLine());
		Console.Write("ingrese el segundo numero: ");
		z = int.Parse(Console.ReadLine());
		
		while(control<=x ){
			cant1 = cant1+1;
			control = control*10;
			
		} while(control2<=z){
			cant2 = cant2+1;
			control2 = control2*10;
		}
		if (cant1<cant2){
			Console.WriteLine("El segundo numero tiene mas digitos");
			
		}else if(cant2<cant1){
			Console.WriteLine("El primer numero tiene mas digitos");
		
		}Console.ReadLine();
	}
	
	
	
}