using System;

class program{
	
	public static void Main(string[] args){
		int a = 0,i,n;
		
		Console.WriteLine("Programa que te dice si un numero es primo");
		Console.Write("Digite el numero: ");
		 n = Convert.ToInt32(Console.ReadLine());
		
		for(i=1;i<(n+1);i++){
         if(n%i==0){
             a++;
            }
         }
         if(a!=2){
              Console.WriteLine("No es Primo");
            }else{
                Console.WriteLine("Si es Primo");
         }
		
		Console.ReadLine();
		
		
		
		
		
		
		
		
		
		
	}
	
	
	
	
	
	
	
	
	
	
	
}