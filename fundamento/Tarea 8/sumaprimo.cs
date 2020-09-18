using System;

class program{
	
	public static void Main(string[] args){
		int a = 0,i,n;
		int num,suma = 0;;
		Console.WriteLine("programa que determina si la suma de los digitos de un entero da un numero primo");
		Console.Write("Ingrese el numero entero: ");
		num = Convert.ToInt32(Console.ReadLine());	
		n = num;
		if(num == 0){
			Console.WriteLine("El numero es 0");
			
		} while(n>0){
			suma = suma+n%10;
			n = n/10;
		}
		
		Console.WriteLine("La suma de los digitos es : "+suma);
	
		for(i=1;i<(n+1);i++){
         if(n%i==0){
             a++;
            }
         }
         if(a!=2){
              Console.WriteLine("y "+suma+" no es Primo");
            }else{
                Console.WriteLine("y "+suma+" si es Primo");
		}Console.ReadLine();
	
	}
	
}