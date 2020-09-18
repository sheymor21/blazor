using System;
using System.Collections.Generic;
using System.IO;

namespace Parcial
{
    class Program
    {
        static void Main(string[] args)
        {
            menu();
        }
       static void menu()
        {
            string pathcarpeta = @"C:\Program Files";
            string nombrecarpeta = @"archivolog.txt";
            string combinar = Path.Combine(pathcarpeta, nombrecarpeta);
            try
            {
                if (!Directory.Exists(pathcarpeta))
                {
                    Directory.CreateDirectory(pathcarpeta);
                }
                if (Directory.Exists(pathcarpeta))
                {
                    if (!File.Exists(combinar))
                    {
                        using (var stream = File.Create(combinar))
                        {
                        }
                    }
                }
                StreamWriter Ficha = new StreamWriter(combinar);
                Ficha.Write("numeros");
                Ficha.Close();
                StreamReader Fichalec = new StreamReader(combinar);
                String linea = "";
                while ((linea = Fichalec.ReadLine()) != null)
                {
                    Console.WriteLine(linea);
                }
            }
            catch (Exception E)
            {
                Console.WriteLine(E.Message);
            }


            Console.Clear();
            Console.WriteLine("***menu***");
            Console.WriteLine("[1]---agregar producto");
            Console.WriteLine("[2]---buscar producto");
            Console.WriteLine("[3]---editar producto");
            Console.WriteLine("[4]---listar productos");
            Console.Write("ingrese la opcion: ");
            string inicio = Console.ReadLine();
            switch (inicio)
            {
                case "1":
                    agregar();
                    break;
                case "2":
                    buscar();
                    break;
                case "3":
                    editar();
                    break;
                case "4":
                    listar();
                    break;
                default:
                    Console.WriteLine("esta opcion no es valida , vuelva a ingresar una opcion");
                    Console.ReadKey();
                    menu();  
                    break;


            }
        }
       static void agregar()
        {
            Console.Clear();
            manejador md = new manejador();
            productos cont = new productos();           
            Console.WriteLine("***menu para agregar producto***");
            Console.Write(" nombre del producto: ");
            cont.nombre = Console.ReadLine();
            Console.Write("tipo de producto: ");
            cont.tipo = Console.ReadLine();
            Console.Write("peso del producto: ");
            cont.peso = Console.ReadLine();
            Console.Write("marca del producto: ");
            cont.marca = Console.ReadLine();
            Console.Write("precio del producto: ");
            cont.precio = Console.ReadLine();
            Console.Write("*Es comestible o bebible: ");
            cont.ingerir = Console.ReadLine();
            Console.WriteLine("su producto se a agregado");
            Console.ReadKey();
            md.Agregar(cont);
            menu();
        }
        static void listar()
        {
            Console.Clear();
            //aun no entiendo en que parte de la lista esta fallando, no se si agrega o no
            List<productos> prod = null;
            manejador md = new manejador();
            prod = md.lis();
            Console.WriteLine("***menu de listado***");
            foreach(productos Z in md.lis())
            {
                Console.WriteLine(Z.marca);
            }
            Console.ReadKey();
            menu();
        }
        static void editar()
        {
            menu();
            Console.WriteLine("***menu de editado***");
            

        }
        static void buscar()
        {
            Console.Clear();
            Console.WriteLine("***menu de buscar***");
            Console.WriteLine("[1]---buscar por normbre");
            Console.WriteLine("[2]---buscar por marca");
            Console.WriteLine("[3]---buscar por tipo");
            Console.WriteLine("[4]---buscar por precio");
            Console.WriteLine("[5]---buscar por peso");
            Console.WriteLine("[z]--- volver");
            Console.Write("ingrese la opcion: ");
            string busc = Console.ReadLine();
            switch (busc)
            {
                case "1":
                    buscarnom();
                    break;
                case "2":
                    buscarmarc();
                    break;
                case "3":
                    buscartip();
                    break;
                case "4":
                    buscarpre();
                    break;
                case "5":
                    buscarpeso();
                    break;
                case "z":
                    menu();
                    break;
                default:
                    Console.WriteLine("esta opcion no es valida");
                    buscar();
                    break;
                        

            }
        }
        static void buscarnom()
        {
            menu();
            Console.Clear();
            List<productos> prod = null;
            manejador md = new manejador();
            Console.WriteLine("***busqueda por nombre***");
            prod = md.lis();
            Console.WriteLine("Buscador de contactos");
            Console.Write("Digite el nombre: ");
            string nombre = Convert.ToString(Console.ReadLine());

            foreach (productos z in prod)
            {
                if (nombre == z.nombre)
                {
                    Console.WriteLine("{0}", z.nombre);
                }

                Console.ReadKey();

            }
        }
        static void buscarmarc()
        {
            menu();
            Console.WriteLine("***busqueda por marca***");
        }
        static void buscartip()
        {
            menu();
            Console.WriteLine("***busqueda por tipo***");
        }
        static void buscarpre()
        {
            menu();
            Console.WriteLine("***busqueda por precio***");
        }
        static void buscarpeso()
        {
            menu();
            Console.WriteLine("***busqueda por nombre***");
        }
    }
}
