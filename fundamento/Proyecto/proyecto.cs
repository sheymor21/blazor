using System;
using System.Collections.Generic;
using System.IO;
using System.Runtime.Serialization.Formatters.Binary;
using System.Runtime.Serialization;
using System.Globalization;
using System.Media;

class program{
	public static void Main(string[] args){
		
		manejadorcontacto mdcont = new manejadorcontacto();		
		bool continuar = true;
		string	entrada = "";
		bool principal = true;
		string princi = "";
		bool reporter = true;
		string report = "";
		List<contacto> todos = null;
		FileStream streamRead = new FileStream("data.dat",FileMode.Open);
		BinaryFormatter formaterRead = new BinaryFormatter();
		mdcont = (manejadorcontacto)(formaterRead.Deserialize(streamRead));
		streamRead.Close();
		
		continuar:
			SoundPlayer player = new SoundPlayer();
            player.SoundLocation = "untitled #2.wav";
            player.Play();	
		while(principal){		
		Console.Clear();
		Console.WriteLine("Proyecto final");
		Console.WriteLine("1 - gestionar contactos");
		Console.WriteLine("2 - Reportes");
		Console.WriteLine("3 - acerca de...");
		Console.WriteLine("z - para salir");
		Console.Write("ingrese la opcion: ");
		princi = Console.ReadLine();
			switch(princi){ 
				
				case "1":
				Agenda: 
				SoundPlayer player2 = new SoundPlayer();
				player2.SoundLocation = "untitled #3.wav";
				player2.Play();
				
				while(continuar){
				Console.Clear();
				Console.WriteLine("Proyecto final");
				Console.WriteLine("Agenda posee "+mdcont.total()+" contactos");
				Console.WriteLine("1 - para ingresar contacto");
				Console.WriteLine("2 - para editar contacto");
				Console.WriteLine("3 - para eliminar contacto (se recomienda abrir fullscreen)");
				Console.WriteLine("z = para salir");
				Console.Write("ingrese la opcion: ");
				entrada = Console.ReadLine();
					switch(entrada){
						case "1":
						SoundPlayer player3 = new SoundPlayer();
						player3.SoundLocation = "untitled #5.wav";
						player3.Play();
						
						Console.Clear();
						contacto cont = new contacto();
						Console.Write("Ingrese el nombre:");
						cont.nombre = Console.ReadLine();
						Console.Write("Ingrese el apellido:");
						cont.apellido = Console.ReadLine();
						Console.Write("Ingrese el fecha de nacimiento(DD/MM/YYYY): ");
						cont.fechadenacimiento = DateTime.Parse(Console.ReadLine());						
						Console.Write("Ingrese el sexo(M o F):");
						cont.sexo = Console.ReadLine();
						Console.Write("Ingrese el telefono:");
						cont.telefono = Convert.ToInt64(Console.ReadLine());
						Console.Write("Ingrese el cedula:");
						cont.cedula = Console.ReadLine();
						Console.Write("Ingrese el peso(kg):");
						cont.peso = int.Parse(Console.ReadLine());
						Console.Write("Ingrese el altura(M):");
						cont.altura = int.Parse(Console.ReadLine());
						Console.Write("Ingrese el salario:");
						cont.salario = int.Parse(Console.ReadLine());
						Console.Write("Ingrese el correo electronico:");
						cont.correoelectronico = Console.ReadLine();
						mdcont.agregarcontacto(cont);											
						goto Agenda;
					
						case "2":			
						break;
						
						case "3":
							SoundPlayer player4 = new SoundPlayer();
							player4.SoundLocation = "untitled #7.wav";
							player4.Play();
							
							
							Console.Clear();
							if(mdcont.total()>0){
							Console.WriteLine("Lista de contactos");
							todos = mdcont.obtenercontacto();
							Console.WriteLine("id \t nombre completo \t\t fecha de nacimiento \t sexo \t telefono \t cedula \t\t peso  altura \t salario \t correo electronico");
							int n = 1;
							foreach(contacto cant in todos)
							{
								Console.WriteLine("{0} \t{1} {2} \t\t\t {3} \t {4} \t {5} \t {6} \t {7} \t {8} \t {9} \t {10}",n,cant.nombre,cant.apellido,cant.fechadenacimiento,cant.sexo,cant.telefono,cant.cedula,cant.peso,cant.altura,cant.salario,cant.correoelectronico);
								n++;
							}
							Console.Write("Digite el id del contacto que quiere borrar: ");
							int num = 0;
							int.TryParse(Console.ReadLine(), out num);
							if(num>0 && num<mdcont.total()+1){
							mdcont.borrarcontacto(num-1);
							Console.WriteLine("Contacto borrado");
							}else {
								Console.WriteLine("Su opcion no existe");
							}																				
							}else {
								Console.WriteLine("No hay contactos que eliminar");
							}
							Console.ReadKey();		
						goto Agenda;
						
						case "z":
						Console.WriteLine("volviendo al menu");						
						FileStream stream = new FileStream("data.dat",FileMode.Create);
						BinaryFormatter formater = new BinaryFormatter();
						formater.Serialize(stream,mdcont);
						stream.Close();
						Console.ReadKey();
						goto continuar;
					
					}
												
				}
			
				break;
											
				case "2":
					reporter:
					string  nombre;
					string apellido;
					SoundPlayer player5 = new SoundPlayer();
					player5.SoundLocation = "untitled #10.wav";
					player5.Play();
					
					while(reporter){
					
					Console.Clear();
					Console.WriteLine("Reportes");
					Console.WriteLine("1 - Lista de contactos(se recomienda estar en fullscreen)");
					Console.WriteLine("2 - cantidad de contactos por signo zodiacal");
					Console.WriteLine("3 - mostrar nombre, apellido y signo zodiacal de cada contacto");
					Console.WriteLine("4 - cantidad de contacto por rango de edad");
					Console.WriteLine("5 - mostrar nombre,apellido y edad");
					Console.WriteLine("6 - busqueda");
					Console.WriteLine("7 - exportar");
					Console.WriteLine("z - para salir");
					Console.Write("ingrese la opcion: ");
					report = Console.ReadLine();
						switch(report){
							case "1":
								Console.Clear();
								Console.WriteLine("Lista de contactos");
								todos = mdcont.obtenercontacto();
								Console.WriteLine("nombre completo \t\t fecha de nacimiento \t sexo \t telefono \t cedula \t peso \t altura \t salario \t correo electronico");
								foreach(contacto cant in todos)
								{
								Console.WriteLine("{0} {1} \t\t {2} \t {3} \t {4} \t {5} \t {6} \t {7} \t\t {8} \t {9}",cant.nombre,cant.apellido,cant.fechadenacimiento,cant.sexo,cant.telefono,cant.cedula,cant.peso,cant.altura,cant.salario,cant.correoelectronico);
							
								}Console.ReadKey();
							goto reporter;
							
							case "2":
							Console.Clear();
							int conta1=0,conta2=0,conta3=0,conta4=0,conta5=0,conta6=0;
							int conta7=0,conta8=0,conta9=0,conta10=0,conta11=0;						
							int dia1 = 0;
							int mes1 = 0;
							Console.Clear();
							Console.WriteLine("Cantidad de contactos por signo zodiacal");
							todos = mdcont.obtenercontacto();
							Console.WriteLine("cantidad \t signo zodiacal");	
							foreach(contacto j in todos){
								mes1 = j.fechadenacimiento.Month;
								dia1 = j.fechadenacimiento.Day;					
								
								if(mes1 == 1 && dia1 <= 19){
																		
									conta1++;
								}else if(mes1 == 2 && dia1 <=18){
									
									conta2++;
								}else if(mes1 == 3 && dia1 <=20){
									
									conta3++;
								}else if(mes1 == 4 && dia1 <= 20){
									
									conta4++;
								}else if(mes1 == 5 && dia1 <=20){
									
									conta5++;
								}else if(mes1 == 6 && dia1 <= 24){
									
									conta6++;
								}else if(mes1 == 7 && dia1 <= 22){
									
									conta7++;
								}else if(mes1 == 8 && dia1 <= 23){
									
									conta8++;
								}else if(mes1 == 9 && dia1 <= 23){
								
									conta9++;
								}else if(mes1 == 10 && dia1 <= 22){
									
									conta10++;
								}else if(mes1 == 11 && dia1 <= 22){
									
									conta11++;
								}else if(mes1 == 12 && dia1 <= 21){
									
								}else {
										conta1++;
								}								
								
							}
								Console.WriteLine("{0} \t\t Capricornio",conta1);
								Console.WriteLine("{0} \t\t Acuario",conta2);
								Console.WriteLine("{0} \t\t Piscis",conta3);
								Console.WriteLine("{0} \t\t Aries",conta4);
								Console.WriteLine("{0} \t\t Tauro",conta5);
								Console.WriteLine("{0} \t\t Geminis",conta6);
								Console.WriteLine("{0} \t\t Cancer",conta7);
								Console.WriteLine("{0} \t\t Leo",conta8);
								Console.WriteLine("{0} \t\t Virgo",conta9);
								Console.WriteLine("{0} \t\t Escorpio",conta10);
								Console.WriteLine("{0} \t\t Sagitario",conta11);
								Console.ReadLine();
							goto reporter;
						
							case "3":
							string zodiacal = "";
							int dia = 0;
							int mes = 0;
							Console.Clear();
							Console.WriteLine("los contactos con sus signos zodiacales");
							todos = mdcont.obtenercontacto();
							Console.WriteLine("nombre completo \t signo zodiacal");	
							foreach(contacto j in todos){
								mes = j.fechadenacimiento.Month;
								dia = j.fechadenacimiento.Day;
								zodiacal = "";
								
								if(mes == 1 && dia <= 19){
									zodiacal = "Capricornio";
								}else if(mes == 2 && dia <=18){
									zodiacal = "Acuario";
								}else if(mes == 3 && dia <=20){
									zodiacal = "Piscis";
								}else if(mes == 4 && dia <= 20){
									zodiacal = "Aries";
								}else if(mes == 5 && dia <=20){
									zodiacal = "Tauro";
								}else if(mes == 6 && dia <= 24){
									zodiacal = "Geminis";
								}else if(mes == 7 && dia <= 22){
									zodiacal = "Cancer";
								}else if(mes == 8 && dia <= 23){
									zodiacal = "Leo";
								}else if(mes == 9 && dia <= 23){
									zodiacal = "Virgo";
								}else if(mes == 10 && dia <= 22){
									zodiacal = "Libra";
								}else if(mes == 11 && dia <= 22){
									zodiacal = "Escorpio";
								}else if(mes == 12 && dia <= 21){
									zodiacal = "Sagitario";
								}else {zodiacal = "Capricornio";}
								
									
									
								Console.WriteLine("{0} {1} \t\t {2}",j.nombre,j.apellido,zodiacal);
								
							}
							Console.ReadLine();
							
							goto reporter;
							
							case "4":
							Console.Clear();
							int edad;
							int meses = DateTime.Today.Month;
							int niño=0,jov=0,adul=0,abu=0;
							todos = mdcont.obtenercontacto();
							Console.WriteLine("Rango de edad de los contactos");
							foreach(contacto E in todos){
									
								edad = DateTime.Today.Year - E.fechadenacimiento.Year;
							
								if(meses <= E.fechadenacimiento.Month){
									edad = edad-1;
								}
								if(edad>0 && edad<=17){
									niño++;
								}else if(edad>=18 && edad<30){
									jov++;	
								}else if(edad>30 && edad<50){
									adul++;
								}else if(edad>50){
									abu++;
								}
								
							}
							Console.WriteLine("  [{0}]  Entre 0 y 17 años existen  ",niño);
							Console.WriteLine("  [{0}]  Entre 18 y 30 años existen ",jov);
							Console.WriteLine("  [{0}]  Entre 30 y 50 años existen ",adul);
							Console.WriteLine("  [{0}]  Mayores de 50 años existen ",abu);
							Console.ReadLine();														
							goto reporter;
							
							case "5":
							Console.Clear();
							int edad1;
							int meses1 = DateTime.Today.Month;
							todos = mdcont.obtenercontacto();
							Console.WriteLine("Nombre completo \t Edad");
							foreach(contacto E in todos){
									
								edad1 = DateTime.Today.Year - E.fechadenacimiento.Year;
							
								if(meses1 <= E.fechadenacimiento.Month){
									edad1 = edad1-1;
									
								}Console.WriteLine("{0} {1} \t\t {2}",E.nombre,E.apellido,edad1);
								
							}	Console.ReadLine();
								goto reporter;
							
							
							
							
							
							case "6":
							SoundPlayer player6 = new SoundPlayer();
							player6.SoundLocation = "untitled #13.wav";
							player6.Play();
							
							Console.Clear();
							todos = mdcont.obtenercontacto();
							Console.WriteLine("Buscador de contactos");
							Console.Write("Digite el nombre: ");
							nombre = Convert.ToString(Console.ReadLine());
							Console.Write("Digite el apellido: ");
							apellido = Convert.ToString(Console.ReadLine());
							foreach(contacto z in todos)
							{
								if(nombre == z.nombre){
								Console.WriteLine("{0} {1} \t\t {2} \t {3} \t {4} \t {5} \t {6} \t {7} \t\t {8} \t {9}",z.nombre,z.apellido,z.fechadenacimiento,z.sexo,z.telefono,z.cedula,z.peso,z.altura,z.salario,z.correoelectronico);
								
								
								
								} else if (apellido == z.apellido){
									
									Console.WriteLine("{0} {1} \t\t {2} \t {3} \t {4} \t {5} \t {6} \t {7} \t\t {8} \t {9}",z.nombre,z.apellido,z.fechadenacimiento,z.sexo,z.telefono,z.cedula,z.peso,z.altura,z.salario,z.correoelectronico);
		
								}Console.ReadKey();
							
							}
							
						
							goto reporter;
							
							case "7":							
							goto reporter;
							
							
							case "z":
							Console.WriteLine("Volviendo al menu");
							Console.ReadKey();
							goto continuar;
																		
						}					
					
					}break;
				case "3":
				Console.Clear();
				Console.WriteLine("Creador: José Armando Coronel Vasquez");
				Console.WriteLine("Matricula: 2018-6778");
				Console.WriteLine("");
				Console.WriteLine("Que se sintio al hacer la tarea: mucho estres y adrenalina, tambien confusion");
				Console.WriteLine("");
				Console.WriteLine("Que porcentaje esta hecho: un 70% :-(");
				Console.ReadLine();
				goto continuar;
				case "z":
					SoundPlayer player7 = new SoundPlayer();
					player7.SoundLocation = "untitled #14.wav";
					player7.Play();
					Console.WriteLine("usted a salido del programa");
					Console.ReadKey();
					principal = false;
					break;	
				
				default:
				Console.WriteLine(princi+" opcion invalida ");
				Console.ReadKey();
				break;
			}
		}	
	}			
}		