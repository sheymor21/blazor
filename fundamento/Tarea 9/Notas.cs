using System;

class program{
	public static void Main(string[] args)
    {
        int[] notas = new int[10];

		Console.WriteLine("programa que te dice el equivalente literal de las notas");
        for(int x = 0; x<notas.Length; x++)
        {
            Console.Write("Ingrese la nota: ");
            notas[x] = int.Parse(Console.ReadLine());
			
			
        } for(int j=0; j<notas.Length; j++){
			if(notas[j]>=0 && notas[j]<=69){
				Console.WriteLine("La nota "+notas[j]+" es F");
			}else if(notas[j]>=70 && notas[j]<=79){
				Console.WriteLine("La nota "+notas[j]+" es C");
			}else if(notas[j]>=80 && notas[j]<=89){
				Console.WriteLine("La nota "+notas[j]+" es B");
			}else if(notas[j]>=90){
				Console.WriteLine("La nota "+notas[j]+" es A");	
			}
		
		}Console.ReadLine();
        
        
    }
	
	
}