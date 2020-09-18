using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
namespace MayorMenorLista
{
    class Program
    {       
        static void Main(string[] args)
        {           
          int may =-10000,men=10000;
         String cad="";
         Random ale = new Random();
         int []Num=new int[100];
         for(int i=0;i<100;i++){
           Num[i]=ale.Next(500);
           if(Num[i]>may){
               may=Num[i];
           }
           if (Num[i] < men)
           {
               men = Num[i];
           }
           cad=cad+" "+Num[i];
         }
          Console.WriteLine(cad);
          Console.WriteLine("El mayor es:" + may);
          Console.WriteLine("El menor es:" + men); 
           Console.ReadLine();
        }
    }
}