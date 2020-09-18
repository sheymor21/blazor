using System;

class program{
	public static void Main(string[] args){
		int[] num = new int[100];
		int cam = 0;
		int promedio = 0;
		int cont = 0;
		int menor =0;
		int mayor = 0;
		
	Console.WriteLine("Programa que te acepta numeros y muestra el promedio de los numeros digitados, y algunas cosas mas");
		Console.WriteLine("Digite 0 para finalizar");
		
		for(int x =0; x<num.Length; x++){
			Console.Write("digite el numero: ");
			num[x] = int.Parse(Console.ReadLine());				
				cont++;
							
				
				if(num[x] == 0 ){
					break;
				}
		} 
		
		for(int j =0; j<num.Length; j++){			
			cam = cam + num[j];
			if(num[j]>mayor){
				mayor = num[j];
				
			}else if(num[j]<menor){
				menor = num[j];
				
			}//else if (menor == 00){
				
			//}
			
			
	}promedio = cam/(cont-1);
	cont = cont-1;
	Console.WriteLine("El promedio de los numeros es: "+promedio);
	Console.WriteLine("La cantidad de numeros digitados es: "+cont);
		Console.WriteLine("El mayor digito ingresado es : "+mayor);
		Console.WriteLine("El menor digito ingresado es: "+menor);
		Console.ReadLine();
	
	}
	
}