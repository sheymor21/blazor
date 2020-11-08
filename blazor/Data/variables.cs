using System;

namespace sistema
{

    public class almacen
    {

        public int id{get;set;}
        public string Nombre { get; set; }
        public string Apellido { get; set; }
        public string Sexo { get; set; }
        public DateTime Fecha_nacimiento { get; set; }
        public string Pais_nacimiento { get; set; }
        public string Ciudad_nacimiento { get; set; }
        public string Pais_residencia { get; set; }
        public string Ciudad_residencia { get; set; }
        public string Direccion { get; set; }
        public long Telefono { get; set; }
        public long Celular { get; set; }
        public string Correo { get; set; }
        public string Tipo_documento { get; set; }
        public string Documento { get; set; }
        public string Estado { get; set; }
        public string Pareja { get; set; }
        public string Hijos { get; set; }
        public int N_hijos { get; set; }
        public string Profesion { get; set; }
        public string Empresa_nombre { get; set; }
        public string Ocupacion_actual { get; set; }
        public long Telefono_empresa { get; set; }
        public string Nivel { get; set; }
        public string Suspendido { get; set; }
        public string Razon { get; set; }
        public DateTime Fecha_conversion { get; set; }
        public DateTime Fecha_bautismo { get; set; }
        public DateTime Fecha_aceptacion { get; set; }
        public string Denominacion_religiosa { get; set; }
        public string Nombre_iglesiaA { get; set; }
        public string Iglesia_anterior { get; set; }
        public string Nombre_pastorA { get; set; }
        public string Diciplinado { get; set; }
        public string Funcion_religiosa { get; set; }
        public string Ministerio_fruto { get; set; }
        public string Ministerios_servidos { get; set; }
        public string Ministerio_llamado { get; set; }
        public string Metas { get; set; }
        public string Respaldo_estudios { get; set; }
        public int cantidad { get; set; }
        public string causa { get; set; }




    }

    public class tictac
    {

        public bool documento = false;
        public bool documento2 = false;
        public bool documento3 = false;
        public bool hijos = false;
        public bool hijos2 = false;

        public bool casado = false;
        public bool casado2 = false;

        public bool disciplinado = false;
        public bool disciplinado2 = false;

        public bool sexo = false;
        public bool sexo2 = false;

        public bool ocupa = false;
        public bool ocupa2 = false;
        public bool ocupa3 = false;
        public bool ocupa4 = false;
        public bool ocupa5 = false;
        public bool ocupa6 = false;
        public bool ocupa7 = false;
        public bool ocupa8 = false;
        public bool ocupa9 = false;
        public bool ocupa10 = false;
        public bool ocupa11 = false;

        public bool expulsado = false;
        public bool expulsado2 = false;

        public bool estudio = false;

        public bool estudio2 = false;
        almacen g = new almacen();
         public void EstadoCT()
    {
        casado = true;
        g.Estado = "Casado";
    }

    public void EstadoCF()
    {
        casado = false;
        g.Estado ="Soltero";
    }

    public void HijosT()
    {
        hijos = true;
        g.Hijos = "Si";
    }

    public void HijosF()
    {
        hijos = false;
        g.Hijos = "No";
    }

    public void disciplinaT()
    {
        disciplinado = true;
        g.Diciplinado = "Si";
    }

    public void disciplinaF()
    {
        disciplinado = false;
        g.Diciplinado = "No";
    }

    public void sexoH()
    {
        g.Sexo = "M";
    }

    public void sexoF()
    {
        g.Sexo = "F";
    }

    public void docuC()
    {
        g.Tipo_documento = "Cedula";
    }

    public void docuP()
    {
        g.Tipo_documento = "Pasaporte";
    }

    public void docuD()
    {
        g.Tipo_documento = "DNI";
    }

    public void estudioT()
    {
        g.Respaldo_estudios = "Si";
    }

    public void estudioF()
    {
        g.Respaldo_estudios = "No";
    }

    public void expulT()
    {
        g.Suspendido = "Si";
    }

    public void expulF()
    {
        g.Suspendido = "No";
    }

    }

    public class filtros
    {
        public bool Pnombre = false;
        public bool Pdenominacion = false;
        public bool Pid = false;
        public bool Ppais = false;
        public bool Pciudad = false;
        public bool Piglesia = false;

        public int id{get;set;}
        public string nombre{get;set;}
        public string sexo{get;set;}
        public string correo{get;set;}
        public string Nombre_iglesia{get;set;}
        public string denominacion{get;set;}
        public string pais{get;set;}
        public string ciudad{get;set;}

        public void pnombre()
        {
            Pnombre = true;
            Pdenominacion = false;
            Pid = false;
            Ppais = false;
            Pciudad = false;
            Piglesia = false;
        }
        public void pdenominacion()
        {
            Pnombre = false;
            Pdenominacion = true;
            Pid = false;
            Ppais = false;
            Pciudad = false;
            Piglesia = false;
        }
        public void pid()
        {
            Pnombre = false;
            Pdenominacion = false;
            Pid = true;
            Ppais = false;
            Pciudad = false;
            Piglesia = false;
        }
        public void ppais()
        {
            Pnombre = false;
            Pdenominacion = false;
            Pid = false;
            Ppais = true;
            Pciudad = false;
            Piglesia = false;
        }
        public void pciudad()
        {
            Pnombre = false;
            Pdenominacion = false;
            Pid = false;
            Ppais = false;
            Pciudad = true;
            Piglesia = false;
        }
        public void piglesia()
        {
            Pnombre = false;
            Pdenominacion = false;
            Pid = false;
            Ppais = false;
            Pciudad = false;
            Piglesia = true;
        }
        public void todos()
        {
            Pnombre = false;
            Pdenominacion = false;
            Pid = false;
            Ppais = false;
            Pciudad = false;
            Piglesia = false;
        }
    }

}