using System;


namespace calculadora
{

    class program
    {
        public static void Main(string[] agrs)
        {
            string[] historial = new string[5];
            double result = 0;
            double cant = 0;
            double promedio = 0;
            double resultado = 0;
            double result2 = 0;
            string mensaje = "";
            double u = 0;
        volver:
            Console.Clear();
            Console.WriteLine("****Calculadora****");
            Console.WriteLine("1 - Sumar");
            Console.WriteLine("2 - Restar");
            Console.WriteLine("3 - Multiplicar");
            Console.WriteLine("4 - Dividir");
            Console.WriteLine("5 - Sacar promedios");
            Console.WriteLine("6 - Mostrar historial");
            Console.Write("Ingrese la opcion: ");
            string inicio = Console.ReadLine();

            switch (inicio)
            {
                case "1":
                    Console.Clear();
                    u = suma(cant);
                    mensaje = "El resultado de la suma es: " + u;
                    historial[0] = mensaje;
                    Console.WriteLine(mensaje);
                    Console.ReadLine();
                    goto volver;

                case "2":
                    Console.Clear();
                    u = resta(resultado);
                    mensaje = "El resultado de la Resta es: " + u;
                    historial[1] = mensaje;
                    Console.WriteLine(mensaje);
                    Console.ReadLine();
                    goto volver;

                case "3":
                    Console.Clear();
                    u = multiplicacion(result);
                    mensaje = "El resultado de la multiplicacion es: " + u;
                    historial[2] = mensaje;
                    Console.WriteLine(mensaje);
                    Console.ReadLine();
                    goto volver;

                case "4":
                    Console.Clear();
                    u = division(result2);
                    mensaje = "El resultado de la division es: " + u;
                    historial[3] = mensaje;
                    Console.WriteLine(mensaje);
                    Console.ReadLine();
                    goto volver;

                case "5":
                    Console.Clear();
                    u = promedi(promedio);

                    if (u > 0 && u <= 69)
                    {
                        mensaje = "El promedio es " + u + " por lo tanto es F";
                        Console.WriteLine(mensaje);
                        historial[4] = mensaje;
                    }
                    else if (u >= 70 && u <= 79)
                    {
                        mensaje = "El promedio es " + u + " por lo tanto es C";
                        Console.WriteLine(mensaje);
                        historial[4] = mensaje;
                    }
                    else if (u >= 80 && u <= 89)
                    {
                        mensaje = "El promedio es " + u + " por lo tanto es B";
                        Console.WriteLine(mensaje);
                        historial[4] = mensaje;
                    }
                    else if (u >= 90)
                    {
                        mensaje = "El promedio es " + u + " por lo tanto es A";
                        Console.WriteLine(mensaje);
                        historial[4] = mensaje;
                    }

                    Console.ReadLine();
                    goto volver;


                case "6":
                    Console.Clear();

                    for (int i = 0; i < historial.Length; i++)
                    {
                        if (historial[i] == mensaje)
                        {
                            Console.WriteLine(historial[i]);
                            Console.ReadLine();
                        }
                        else
                        {
                            Console.WriteLine("---no hay registro disponible---");
                            Console.ReadLine();

                        }

                    }
                    goto volver;
                default:
                    Console.WriteLine("Esta opcion no es valida");
                    Console.ReadLine();
                    goto volver;
            }

        }


        private static double suma(double cant)
        {
            int s = 0;
            int j = 0;
            double[] datos = new double[1000];
        volver:
            Console.Clear();
            Console.WriteLine("****Suma****");
            Console.Write("Digite la cantidad de numeros a sumar: ");
            int.TryParse(Console.ReadLine(), out s);
            if (s > 0)
            {
                for (int x = 0; x < datos.Length; x++)
                {
                    if (s == 1)
                    {
                        Console.WriteLine("no se puede sumar un solo numero,intentelo de nuevo");
                        Console.ReadKey();
                        goto volver;
                    }

                    Console.Write("Digite el numero a sumar: ");
                    double.TryParse(Console.ReadLine(), out datos[x]);
                    j++;
                    cant = cant + datos[x];
                    if (s == j)
                    {
                        break;
                    }

                }

            }
            else
            {
                Console.WriteLine("su opcion no es valida, vuelva a escribir");
                Console.ReadKey();
                goto volver;
            }
            return cant;
        }
        private static double resta(double resultado)
        {
            double cant = 0;
            int s = 0;
            int j = 1;
            double h = 0;
            double[] datos = new double[1000];
        volver:
            Console.Clear();
            Console.WriteLine("****Resta****");
            Console.Write("Digite la cantidad de numeros a restar: ");
            int.TryParse(Console.ReadLine(), out s);
            if (s == 1)
            {
                Console.WriteLine("no se puede restar un numero, vuelva a ingresar la cantidad de digitos");
                Console.ReadKey();
                goto volver;
            }
            Console.Write("digite el numero al que los demas restaran: ");
            double.TryParse(Console.ReadLine(), out h);
            if (s > 0)
            {
                for (int x = 0; x < datos.Length; x++)
                {

                    Console.Write("Digite el siguiente numero a restar: ");
                    double.TryParse(Console.ReadLine(), out datos[x]);
                    j++;
                    cant = cant + datos[x];
                    resultado = h - cant;

                    if (s == j)
                    {
                        break;
                    }

                }

            }
            else
            {
                Console.WriteLine("su opcion no es valida, vuelva a escribir");
                Console.ReadKey();
                goto volver;
            }
            return resultado;
        }
        private static double multiplicacion(double result)
        {
            //Profesor, por un error logico que no pude resolver realize esta parte de esta forma, analizare aun mas afondo para lograr la solucion.
            double cant = 0;
            int s = 0;
            double[] datos = new double[1000];
            double cant1 = 0; double cant2 = 0; double cant3 = 0; double cant4 = 0; double cant5 = 0; double cant6 = 0;
            double cant7 = 0; double cant8 = 0; double cant9 = 0;
        volver:
            Console.Clear();
            Console.WriteLine("****Multiplicacion****");
            Console.Write("Digite la cantidad de numeros a multiplicar: ");
            int.TryParse(Console.ReadLine(), out s);
            if (s == 1)
            {
                Console.WriteLine("No se puede multiplicar un solo numero,intentelo de nuevo");
                Console.ReadKey();
                goto volver;
            }
            if (s > 10)
            {
                Console.WriteLine("debido a fallas tecnicas solo acepta hasta 10 digitos, se siguen realizando arreglos");
                Console.ReadKey();
                goto volver;
            }
            Console.Write("Digite el numero a multiplicar: ");
            double.TryParse(Console.ReadLine(), out cant);
            if (s > 0)
            {
                for (int x = 0; x >= 0; x++)
                {


                    if (s == 2)
                    {
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        result = cant * cant1;
                        break;
                    }
                    else if (s == 3)
                    {
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        result = cant * cant1 * cant2;
                        break;
                    }
                    else if (s == 4)
                    {
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el numero a multiplicar: ");
                        result = cant * cant1 * cant2 * cant3;
                        break;
                    }
                    else if (s == 5)
                    {
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el numero a multiplicar: ");
                        result = (cant * cant1) * cant2 * cant3 * cant4;
                        break;
                    }
                    else if (s == 6)
                    {
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant5);
                        result = (cant * cant1) * cant2 * cant3 * cant4 * cant5;
                        break;
                    }
                    else if (s == 7)
                    {
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant5);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant6);
                        result = (cant * cant1) * cant2 * cant3 * cant4 * cant5 * cant6;
                        break;
                    }
                    else if (s == 8)
                    {
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant5);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant6);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant7);
                        result = (cant * cant1) * cant2 * cant3 * cant4 * cant5 * cant6 * cant7;
                        break;
                    }
                    else if (s == 9)
                    {
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant5);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant6);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant7);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant8);
                        result = (cant * cant1) * cant2 * cant3 * cant4 * cant5 * cant6 * cant7 * cant8;
                        break;
                    }
                    else if (s == 10)
                    {
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant5);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant6);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant7);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant8);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant9);
                        result = (cant * cant1) * cant2 * cant3 * cant4 * cant5 * cant6 * cant7 * cant8 * cant9;

                        break;
                    }



                }

            }
            else
            {
                Console.WriteLine("su opcion no es valida, vuelva a escribir");
                Console.ReadKey();
                goto volver;
            }
            return result;
        }
        private static double division(double result2)
        {
            //Profesor, por un error logico que no pude resolver realize esta parte de esta forma, analizare aun mas afondo para lograr la solucion.
            double cant = 0;
            int s = 0;
            double[] datos = new double[1000];
            double cant1 = 0; double cant2 = 0; double cant3 = 0; double cant4 = 0; double cant5 = 0; double cant6 = 0;
            double cant7 = 0; double cant8 = 0; double cant9 = 0;
        volver:
            Console.Clear();
            Console.WriteLine("****Division****");
            Console.Write("Digite la cantidad de numeros a dividir: ");
            int.TryParse(Console.ReadLine(), out s);
            if (s == 1)
            {
                Console.WriteLine("No se puede dividir un solo numero,intentelo de nuevo");
                Console.ReadKey();
                goto volver;
            }
            if (s > 10)
            {
                Console.WriteLine("debido a fallas tecnicas solo acepta hasta 10 digitos, se siguen realizando arreglos");
                Console.ReadKey();
                goto volver;
            }
            Console.Write("Digite el dividendo: ");
            double.TryParse(Console.ReadLine(), out cant);
            if (s > 0)
            {
                for (int x = 0; x >= 0; x++)
                {


                    if (s == 2)
                    {
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        result2 = cant / cant1;
                        break;
                    }
                    else if (s == 3)
                    {
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        result2 = cant / cant1 / cant2;
                        break;
                    }
                    else if (s == 4)
                    {
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el divisor: ");
                        result2 = cant / cant1 / cant2 / cant3;
                        break;
                    }
                    else if (s == 5)
                    {
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el divisor: ");
                        result2 = (cant / cant1) / cant2 / cant3 / cant4;
                        break;
                    }
                    else if (s == 6)
                    {
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant5);
                        result2 = (cant / cant1) / cant2 / cant3 / cant4 / cant5;
                        break;
                    }
                    else if (s == 7)
                    {
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant5);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant6);
                        result2 = (cant / cant1) / cant2 / cant3 / cant4 / cant5 / cant6;
                        break;
                    }
                    else if (s == 8)
                    {
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant5);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant6);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant7);
                        result2 = (cant / cant1) / cant2 / cant3 / cant4 / cant5 / cant6 / cant7;
                        break;
                    }
                    else if (s == 9)
                    {
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant5);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant6);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant7);
                        Console.Write("Digite el numero a multiplicar: ");
                        double.TryParse(Console.ReadLine(), out cant8);
                        result2 = (cant / cant1) / cant2 / cant3 / cant4 / cant5 / cant6 / cant7 / cant8;
                        break;
                    }
                    else if (s == 10)
                    {
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant1);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant2);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant3);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant4);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant5);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant6);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant7);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant8);
                        Console.Write("Digite el divisor: ");
                        double.TryParse(Console.ReadLine(), out cant9);
                        result2 = (cant / cant1) / cant2 / cant3 / cant4 / cant5 / cant6 / cant7 / cant8 / cant9;
                        break;
                    }



                }

            }
            else
            {
                Console.WriteLine("su opcion no es valida, vuelva a escribir");
                Console.ReadKey();
                goto volver;
            }
            return result2;
        }
        private static double promedi(double promedio)
        {
            double cant = 0;
            int s = 0;
            int t = 0;
            double[] datos = new double[1000];
        volver:
            Console.Clear();
            Console.WriteLine("****Promedio****");
            Console.Write("Digite la cantidad de notas a calcular: ");
            int.TryParse(Console.ReadLine(), out s);
            if (s > 0)
            {
                for (int x = 0; x < datos.Length; x++)
                {
                    if (s == 1)
                    {
                        Console.WriteLine("No se puede procesar una sola nota,intentelo de nuevo");
                        Console.ReadKey();
                        goto volver;
                    }

                    Console.Write("Digite la nota: ");
                    double.TryParse(Console.ReadLine(), out datos[x]);
                    t++;
                    cant = cant + datos[x];
                    promedio = cant / t;
                    if (s == t)
                    {
                        break;
                    }

                }



            }
            else
            {
                Console.WriteLine("Su opcion no es valida, vuelva a escribir");
                Console.ReadKey();
                goto volver;
            }

            return promedio;
        }

    }
}
