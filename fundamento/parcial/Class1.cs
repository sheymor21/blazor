using System;
using System.Collections.Generic;
using System.Text;

namespace Parcial
{
    public class productos
    {

        public string nombre;
        public string marca;
        public string tipo;
        public string precio;
        public string peso;
        public string ingerir;


    }
    public class manejador
    {
        private List<productos> prod = new List<productos>();
        public manejador()
        {

        }
        public void Agregar(productos cont)
        {
            prod.Add(cont);
        }

        public List<productos> lis()
        {
            return prod;
        }


        
       
    }
}
