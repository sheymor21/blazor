using System;

class program{
	public static void Main(string[] args){
		int[] notas = new int[10];
		int mayor = -99;
		int menor = 99;
		Console.WriteLine("Nombre: jose armando       Mat: 2018-6778");
		Console.WriteLine("Programa que lee 10 notas y te dice equivalente literal y la mayor y menor");
		
		for(int x=0; x<notas.Length; x++){
			Console.Write("Digite la nota: ");
			notas[x] = int.Parse(Console.ReadLine());
		}
		for(int j=0; j<notas.Length; j++){
			if(notas[j]>=0 && notas[j]<70){
				Console.WriteLine("El equivalente literal de {0} es F",notas[j]);
			}else if(notas[j]>=70 && notas[j]<80){
				Console.WriteLine("El equivalente literal de {0} es C",notas[j]);
			}else if(notas[j]>=80 && notas[j]<90){
				Console.WriteLine("El equivalente literal de {0} es B",notas[j]);
			}else if(notas [j]>=90){
				Console.WriteLine("El equivalente literal de {0} es A",notas[j]);
			}
		} for(int k=0; k<notas.Length; k++){
			if(notas[k]>mayor){
				mayor = notas[k];
			}else if(notas[k]<menor){
				menor = notas[k];
			}
		}Console.WriteLine("La mayor nota es: "+mayor);
		Console.WriteLine("La menor nota es: "+menor);
		Console.ReadLine();
	}
	
	
	
}