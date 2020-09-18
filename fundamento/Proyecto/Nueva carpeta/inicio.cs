using System;
using System.Collections.Generic;
using System.IO;
using System.Runtime.Serialization.Formatters.Binary;
using System.Runtime.Serialization;

namespace iniciar{	
class program{
		
		public class contacto{
		public string nombre;
		public string apellido;
		public int fechadenacimiento;
		public string sexo;
		public int telefono;
		public string cedula;
		public int peso;
		public int altura;
		public int salario;
		public string correoelectronico;
		}
	 private List<contacto> todos = new List<contacto>();
			
	static void Main(string [] args){
		inicio:
		int opcion;
		Console.Clear();
		Console.WriteLine("Proyecto final");
		Console.WriteLine("eliga una opcion: \b\n 1 - Gestionar Contactos \b\n 2 - Reportes \b\n 3 - Extra b\n 4 - acerca de... \b\n 5 - salir");
		Console.Write("Digite la opcion: ");
		opcion = int.Parse(Console.ReadLine());
		switch(opcion){
			case 1: 
			Contactos();
			goto inicio;
			
			case 2:
			Reportes();
			goto inicio;
			
			case 3:
			Extra();
			goto inicio;
			
			case 4: 
			acerca_de();
			goto inicio;
			
			case 5:
			salir();
			goto inicio;
			
			default:
			Console.WriteLine("Dicha opcion no es valida");
			Console.ReadKey();
			goto inicio;
				}
				
			
			}
	 
		static void Contactos(){
			int 
			Console.Clear();
			Console.WriteLine("Gestionar contactos");
			Console.WriteLine(" 1 - Añadir contacto \b\n 2 - eliminar contacto \b\n 3 - editar contactos \b\n 4 - atras");
			
		}
		static void Reportes(){}
		static void Extra(){}
		static void acerca_de(){}
		static void salir(){
		Environment.Exit(0);
			}

class manejadorcontacto{
	
	public void agregarcontacto(contacto cont)
{
		todos.Add(cont);
		
		
	}
	public void borrarcontacto(int num)
	{
			todos.RemoveAt(num);
	}
	
	public int total()
	{
		return todos.Count;
		
	}
	public List<contacto> obtenercontacto(){
		return todos;
		
			}
		}
		
	
	}

}
	
