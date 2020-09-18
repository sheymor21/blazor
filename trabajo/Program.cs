using System;
using System.Collections.Generic;

namespace trabajo
{
    class Program
    {
        static void Main(string[] args)
        {
            List<farmacia> farmaci = null;
            List<contacto> ctc = null;
            farmacia farma = new farmacia();           
            contacto cont = new contacto();
        volver:
            Console.Clear();
            Console.WriteLine("****Proyecto Final****");
            Console.WriteLine(" 1--Inventario de farmacia \n 2--Gestion de contactos \n 3--Utilitarios \n 4--salir");
            Console.Write(" Ingrese la opcion: ");
            string inicio = Console.ReadLine();
            switch (inicio)
            {
                case "1":
                farmacia:
                    Console.Clear();
                    Console.WriteLine("****Inventario de farmacia****");
                    Console.WriteLine(" 1--Insertar medicamentos \n 2--actualizar medicamento \n 3--borrar medicamento \n 4--buscar medicamento \n 5--volver al menu principal \n z--salir del programa");                  
                    Console.Write(" Ingrese la opcion: ");
                    string farmacias = Console.ReadLine();
                    switch (farmacias)
                    {
                        case "1":
                            Console.Clear();
                            Console.WriteLine("Insertar medicamento");
                            Console.Write("Nombre del medicamento: ");
                            farma.nombre = Console.ReadLine();
                            Console.Write("Precio: ");
                            double.TryParse(Console.ReadLine(), out farma.precio);
                            Console.Write("fecha de vencimiento(ejemplo yyyy/mm/dd: ");
                            DateTime.TryParse(Console.ReadLine(), out farma.fecha_vencimiento);
                            Console.Write("Laboratorio: ");
                            farma.laboratorio = Console.ReadLine();
                            farma.agregar(farma);
                            goto farmacia;
                        case "2":
                            Console.Clear();
                            if (farma.total() > 0)
                            {
                                Console.WriteLine("****Lista de medicamentos****");
                                farmaci = farma.Listafarmacia();
                                int n = 1;
                                foreach (farmacia cant in farmaci)
                                {
                                    Console.WriteLine("{0}  {1}  {2}  {3}  {4} ", n, cant.nombre, cant.laboratorio, cant.fecha_vencimiento, cant.precio);
                                    n++;
                                }
                                Console.Write("Digite el ID del medicamento que quiere actualizar: ");
                                int num = 0;
                                int.TryParse(Console.ReadLine(), out num);
                                if (num > 0 && num < farma.total() + 1)
                                {
                                    farma.borrarmedicina(num - 1);
                                    Console.Write("Nombre del medicamento: ");
                                    farma.nombre = Console.ReadLine();
                                    Console.Write("Precio: ");
                                    double.TryParse(Console.ReadLine(), out farma.precio);
                                    Console.Write("fecha de vencimiento(ejemplo yyyy/mm/dd: ");
                                    DateTime.TryParse(Console.ReadLine(), out farma.fecha_vencimiento);
                                    Console.Write("Laboratorio: ");
                                    farma.laboratorio = Console.ReadLine();
                                    farma.agregar(farma);
                                    Console.WriteLine("medicamento a sido actualizado");
                                }
                                else
                                {
                                    Console.WriteLine("Su opcion no existe");
                                }
                            }
                            else
                            {
                                Console.WriteLine("No hay medicamentos que actualizar");
                            }
                            Console.ReadLine();
                            goto farmacia;
                        case "3":
                            Console.Clear();
                            if (farma.total() > 0)
                            {
                                Console.WriteLine("Lista de medicamentos");
                                farmaci = farma.Listafarmacia();
                                int n = 1;
                                foreach (farmacia cant in farmaci)
                                {
                                    Console.WriteLine("{0}  {1}  {2}  {3}  {4} ", n, cant.nombre, cant.laboratorio, cant.fecha_vencimiento, cant.precio);
                                    n++;
                                }
                                Console.Write("Digite el ID del medicamento que quiere borrar: ");
                                int num = 0;
                                int.TryParse(Console.ReadLine(), out num);
                                if (num > 0 && num < farma.total() + 1)
                                {
                                    farma.borrarmedicina(num - 1);
                                    Console.WriteLine("medicamento borrado");
                                }
                                else
                                {
                                    Console.WriteLine("Su opcion no existe");
                                }
                            }
                            else
                            {
                                Console.WriteLine("No hay medicamentos que eliminar");
                            }
                            Console.ReadLine();
                            goto farmacia;
                        case "4":
                        busca:
                            Console.Clear();
                            Console.WriteLine("****Busqueda de medicamento****");
                            Console.WriteLine(" 1--Busqueda por nombre \n 2--Busqueda por laboratorio \n 3-- volver a inventario de farmacia");
                            Console.Write(" Elija la opcion: ");
                            string buscar = Console.ReadLine();
                            switch (buscar)
                            {
                                case "1":
                                nom:
                                    Console.Clear();
                                    string nombre;
                                    farmaci = farma.Listafarmacia();
                                    Console.WriteLine("Buscador de medicinas por nombre");
                                    if (farma.total() > 0)
                                    {
                                        Console.Write("Digite el nombre: ");
                                        nombre = Convert.ToString(Console.ReadLine());
                                        foreach (farmacia z in farmaci)
                                        {
                                            if (nombre == z.nombre)
                                            {
                                                Console.WriteLine("{0} {1} \t\t {2} \t {3} ", z.nombre, z.laboratorio, z.fecha_vencimiento, z.precio);
                                            }
                                            else
                                            {
                                                Console.WriteLine("No se encontro su busqueda");
                                            }
                                            if (nombre == "")
                                            {
                                                Console.WriteLine("no se a escrito nada");
                                                Console.ReadKey();
                                                goto nom;
                                            }
                                        }
                                    }
                                    else
                                    {
                                        Console.WriteLine("no hay ninguna medicina registrada");
                                    }
                                    Console.ReadKey();
                                    goto busca;
                                case "2":
                                lab:
                                    Console.Clear();
                                    string lab;
                                    farmaci = farma.Listafarmacia();
                                    Console.WriteLine("Buscador de medicinas por nombre");
                                    if (farma.total() > 0)
                                    {
                                        Console.Write("Digite el nombre del laboratorio: ");
                                        lab = Convert.ToString(Console.ReadLine());
                                        foreach (farmacia z in farmaci)
                                        {
                                            if (lab == z.laboratorio)
                                            {
                                                Console.WriteLine("{0} {1} \t\t {2} \t {3} ", z.laboratorio, z.nombre, z.fecha_vencimiento, z.precio);
                                            }
                                            else
                                            {
                                                Console.WriteLine("No se encontro su busqueda");
                                            }
                                            if (lab == "")
                                            {
                                                Console.WriteLine("no se a escrito nada");
                                                Console.ReadKey();
                                                goto lab;
                                            }
                                        }
                                    }
                                    else
                                    {
                                        Console.WriteLine("no hay ninguna medicina registrada");
                                    }
                                    Console.ReadKey();
                                    goto busca;
                                case "3":
                                    goto farmacia;
                                default:
                                    Console.WriteLine("opcion no valida, vuelva a dijitar");
                                    Console.ReadKey();
                                    goto busca;
                            }
                        case "5":
                            goto volver;
                        case "z":
                            break;
                        default:
                            Console.WriteLine("Esta opcion no es valida , vuelva a escribir");
                            Console.ReadKey();
                            goto farmacia;
                    }
                    break;
                case "2":
                contacto:
                    Console.Clear();
                    Console.WriteLine("****Gestionador de Contactos****");
                    Console.WriteLine(" 1--Insertar contacto \n 2--actualizar contacto \n 3--borrar contacto \n 4--buscar contacto \n 5--volver al menu principal \n z--salir del programa");
                    Console.Write(" Ingrese la opcion: ");
                    string contacto = Console.ReadLine();
                    switch (contacto)
                    {
                        case "1":
                            Console.Clear();
                            Console.WriteLine("Insertar contacto");
                            Console.Write("Nombre del contacto: ");
                            cont.nombre = Console.ReadLine();
                            Console.Write("telefono: ");
                            int.TryParse(Console.ReadLine(), out cont.telefono);
                            Console.Write("Email: ");
                            cont.email = Console.ReadLine();
                            Console.Write("Direccion: ");
                            cont.direccion = Console.ReadLine();
                            cont.agregar(cont);
                            goto contacto;
                        case "2":
                            Console.Clear();
                            if (cont.total() > 0)
                            {
                                Console.WriteLine("Lista de contactos");
                                ctc = cont.listacontacto();
                                int n = 1;
                                foreach (contacto cant in ctc)
                                {
                                    Console.WriteLine("{0}  {1}  {2}  {3}  {4} ", n, cant.nombre, cant.telefono, cant.email, cant.direccion);
                                    n++;
                                }
                                Console.Write("Digite el id del contacto que quiere actualizar: ");
                                int num = 0;
                                int.TryParse(Console.ReadLine(), out num);
                                if (num > 0 && num < cont.total() + 1)
                                {
                                    cont.borrarcontacto(num - 1);
                                    Console.Write("Nombre del contacto: ");
                                    cont.nombre = Console.ReadLine();
                                    Console.Write("telefono: ");
                                    int.TryParse(Console.ReadLine(), out cont.telefono);
                                    Console.Write("Email: ");
                                    cont.email = Console.ReadLine();
                                    Console.Write("Direccion: ");
                                    cont.direccion = Console.ReadLine();
                                    cont.agregar(cont);
                                    Console.WriteLine("El contacto a sido actualizado");
                                }
                                else
                                {
                                    Console.WriteLine("Su opcion no existe");
                                }
                            }
                            else
                            {
                                Console.WriteLine("No hay contacto que actualizar");
                            }
                            Console.ReadLine();
                            goto contacto;
                        case "3":
                            Console.Clear();
                            if (cont.total() > 0)
                            {
                                Console.WriteLine("Lista de contactos");
                                ctc = cont.listacontacto();
                                int n = 1;
                                foreach (contacto cant in ctc)
                                {
                                    Console.WriteLine("{0}  {1}  {2}  {3}  {4} ", n, cant.nombre, cant.telefono, cant.email, cant.direccion);
                                    n++;
                                }
                                Console.Write("Digite el id del contacto que quiere borrar: ");
                                int num = 0;
                                int.TryParse(Console.ReadLine(), out num);
                                if (num > 0 && num < cont.total() + 1)
                                {
                                    cont.borrarcontacto(num - 1);
                                    Console.WriteLine("contacto borrado");
                                }
                                else
                                {
                                    Console.WriteLine("Su opcion no existe");
                                }
                            }
                            else
                            {
                                Console.WriteLine("No hay contactos que eliminar");
                            }
                            Console.ReadLine();
                            goto contacto;
                        case "4":
                        busca2:
                            Console.Clear();
                            Console.WriteLine("****Busqueda de contacto");
                            Console.WriteLine(" 1--Busqueda por nombre \n 2--Busqueda por Email \n 3-- volver a gestionador de contactos \n z--salir de app");
                            Console.Write(" Elija la opcion: ");
                            string buscar2 = Console.ReadLine();
                            switch (buscar2)
                            {
                                case "1":
                                nom2:
                                    Console.Clear();
                                    string nombre2;
                                    ctc = cont.listacontacto();
                                    Console.WriteLine("Buscador de contactos por nombre");
                                    if (cont.total() > 0)
                                    {
                                        Console.Write("Digite el nombre: ");
                                        nombre2 = Convert.ToString(Console.ReadLine());
                                        foreach (contacto z in ctc)
                                        {
                                            if (nombre2 == z.nombre)
                                            {
                                                Console.WriteLine("{0} {1} \t\t {2} \t {3} ", z.nombre, z.telefono, z.email, z.direccion);
                                            }
                                            else
                                            {
                                                Console.WriteLine("No se encontro su busqueda");
                                            }
                                            if (nombre2 == "")
                                            {
                                                Console.WriteLine("no se a escrito nada");
                                                Console.ReadKey();
                                                goto nom2;
                                            }
                                        }
                                    }
                                    else
                                    {
                                        Console.WriteLine("no hay ningun contacto registrado");
                                    }
                                    Console.ReadKey();
                                    goto busca2;
                                case "2":
                                email:
                                    Console.Clear();
                                    string email;
                                    ctc = cont.listacontacto();
                                    Console.WriteLine("Buscador de contactos por Email");
                                    if (cont.total() > 0)
                                    {
                                        Console.Write("Digite el email: ");
                                        email = Convert.ToString(Console.ReadLine());
                                        foreach (contacto z in ctc)
                                        {
                                            if (email == z.email)
                                            {
                                                Console.WriteLine("{0} {1} \t\t {2} \t {3} ", z.email, z.nombre, z.telefono, z.direccion);
                                            }
                                            else
                                            {

                                                Console.WriteLine("No se encontro su busqueda");

                                            }
                                            if (email == "")
                                            {
                                                Console.WriteLine("no se a escrito nada");
                                                Console.ReadKey();
                                                goto email;
                                            }
                                        }
                                    }
                                    else
                                    {

                                        Console.WriteLine("no hay ningun contacto registrado");
                                    }
                                    Console.ReadKey();
                                    goto busca2;
                                case "3":
                                    goto contacto;
                                default:
                                    Console.WriteLine("opcion no valida, vuelva a seleccionar");
                                    Console.ReadKey();
                                    goto busca2;
                            }
                        case "5":
                            goto volver;
                        case "z":
                            break;
                        default:
                            Console.WriteLine("Esta opcion no es valida , vuelva a escribir");
                            Console.ReadKey();
                            goto contacto;
                    }
                    break;
                case "3":
                utilitario:
                    double faren;
                    double celcius;
                    double pesos;
                    double dolares;
                    double resultado;
                    Console.Clear();
                    Console.WriteLine("****Utilitarios****");
                    Console.WriteLine(" 1--Convertir de grados FARENHEIT a grados CELCIUS \n 2--Convertir de grados CELCIUS a grados FARENHEIT \n 3--Convertir Pesos Dominicanos en Dolares \n 4--Convertir Dolares en Pesos Dominicanos \n 5--volver al menu principal \n z--salir del programa");
                    Console.Write(" Ingrese la opcion: ");
                    string uti = Console.ReadLine();
                    switch (uti)
                    {
                        case "1":
                            Console.Clear();
                            Console.WriteLine("Farenheit a celcius");
                            Console.Write("Digite los grados FARENHEIT: ");
                            double.TryParse(Console.ReadLine(), out faren);
                            resultado = (faren-32)*5/9;
                            Console.Write("En CELCIUS es: "+resultado);
                            Console.ReadLine();
                            goto utilitario;
                        case "2":
                            Console.Clear();
                            Console.WriteLine("Farenheit a celcius");
                            Console.Write("Digite los grados CELCIUS: ");
                            double.TryParse(Console.ReadLine(), out celcius);
                            resultado = (celcius * 9 / 5) + 32;
                            Console.Write("En FARENHEIT es: " + resultado);
                            Console.ReadLine();
                            goto utilitario;
                        case "3":
                            Console.Clear();
                            Console.WriteLine("De pesos dominicanos a dolares");
                            Console.Write("Digite la cantidad en pesos dominicanos: ");
                            double.TryParse(Console.ReadLine(), out pesos);
                            resultado = pesos / 53;
                            if (resultado < 0.5)
                            {
                                Console.Write("En Dolares es: " + Math.Round(resultado,2));
                            }
                            else
                            {
                                Console.Write("En Dolares es: " + Math.Round(resultado));
                            }                            
                            Console.ReadLine();
                            goto utilitario;
                        case "4":
                            Console.Clear();
                            Console.WriteLine("De dolares a pesos dominicanos");
                            Console.Write("Digite la cantidad en dolares: ");
                            double.TryParse(Console.ReadLine(), out dolares);
                            resultado = dolares * 53;
                            Math.Round(resultado);
                            Console.Write("En Pesos Dominicanos es: " + Math.Round(resultado));
                            Console.ReadLine();
                            goto utilitario;
                        case "5":
                            goto volver;
                        case "z":
                            break;
                        default:
                            Console.WriteLine("Esta opcion no es valida , vuelva a escribir");
                            Console.ReadKey();
                            goto utilitario;
                    }
                    break;
                case "4":
                    break;
                default:
                    Console.WriteLine("Esta opcion no es valida , vuelva a escribir");
                    Console.ReadKey();
                    goto volver;
            }
        }
    }
    public class farmacia
    {
        public string nombre;
        public double precio;
        public string laboratorio;
        public DateTime fecha_vencimiento;
        private List<farmacia> Farmacia = new List<farmacia>();
        public void agregar(farmacia farma)
        {
            Farmacia.Add(new farmacia { nombre = farma.nombre, precio = farma.precio, laboratorio = farma.laboratorio, fecha_vencimiento = farma.fecha_vencimiento });
        }
        public List<farmacia> Listafarmacia()
        {
            return Farmacia;
        }
        public int total()
        {
            return Farmacia.Count;
        }
        public void borrarmedicina(int num)
        {
            Farmacia.RemoveAt(num);
        }
    }
    public class contacto
    {
        public string nombre;
        public int telefono;
        public string email;
        public string direccion;
        private List<contacto> Contacto = new List<contacto>();
        public void agregar(contacto cont)
        {
            Contacto.Add(new contacto { nombre = cont.nombre, direccion = cont.direccion, email = cont.email, telefono = cont.telefono });
        }
        public List<contacto>  listacontacto()
        {
            return Contacto;
        }
        public int total()
        {
            return Contacto.Count;
        }
        public void borrarcontacto(int num)
        {
            Contacto.RemoveAt(num);
        }
    }
}
