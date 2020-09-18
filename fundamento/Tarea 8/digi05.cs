using System;

class program{
	public static void Main(string[] args){
		int n=0;
	
	
		Console.WriteLine("programa que te dice el promedio de los numeros terminados en 5");					
		Console.Write("Digite un numero: ");
		n = int.Parse(Console.ReadLine());
					
		for(int i=0;i<100;i++){
			
		if(n>0){
			Console.Write("Digite un numero: ");
			n = int.Parse(Console.ReadLine());	
		}for(int x=0;x<n.ToString().Length;x++){
				if(n.ToString()[x]=='5')
					x = n+n;
					suma++;
		}
			
			
		if(n<=0){ 
		Console.WriteLine("el promedio es: "+x);
		Console.ReadLine();
			}
		  }
		
	
		
		Console.ReadLine();
	}
   } 