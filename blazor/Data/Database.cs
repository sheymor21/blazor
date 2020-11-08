using System;
using System.Collections.Generic;
using Microsoft.EntityFrameworkCore;

namespace DB
{
    public class iglesiaContext : DbContext
    {
        public DbSet<Integrante> integrantes { get; set; }
        public DbSet<Datos_familiares> Datos_Familiares { get; set; }
        public DbSet<Datos_laborales> Datos_Laborales { get; set; }
        public DbSet<Datos_academicos> Datos_Academicos { get; set; }
        public DbSet<Datos_academicos_razon> Datos_Academicos_Razons { get; set; }
        public DbSet<Datos_eclesiasticos> Datos_Eclesiasticos { get; set; }
        public DbSet<Datos_eclesiasticos_disciplina> Datos_Eclesiasticos_Disciplinas { get; set; }
        public DbSet<User> Users { get; set; }

        protected override void OnConfiguring(DbContextOptionsBuilder options)
            => options.UseSqlite("Data Source=iglesia.db");
    }


    public class User
    {
        public int UserId{get;set;}
        public string UserName{get;set;}
        public string foto{get;set;}
        public string password{get;set;}
    }

    public class Integrante
    {
        public int integranteId { get; set; }
        public string Nombre { get; set; }
        public string Apellido { get; set; }
        public string Sexo { get; set; }
        public string Fecha_nacimiento { get; set; }
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

        public List<Datos_familiares> Datos_Familiares { get; } = new List<Datos_familiares>();
        public List<Datos_laborales> Datos_Laborales { get; } = new List<Datos_laborales>();
        public List<Datos_academicos> Datos_Academicos { get; } = new List<Datos_academicos>();
        public List<Datos_eclesiasticos> Datos_Eclesiasticos { get; } = new List<Datos_eclesiasticos>();
    }

    public class Datos_familiares
    {
        public int Datos_familiaresId { get; set; }
        public string Estado { get; set; }
        public string Pareja { get; set; }
        public string Hijos { get; set; }
        public int N_hijos { get; set; }

        public int integranteId { get; set; }
        public Integrante integrante { get; set; }
    }

    public class Datos_laborales
    {
        public int Datos_laboralesId { get; set; }
        public string Profesion { get; set; }
        public string Empresa_nombre { get; set; }
        public string Ocupacion_actual { get; set; }
        public long Telefono { get; set; }
        public int integranteId { get; set; }
        public Integrante integrante { get; set; }
    }

    public class Datos_academicos
    {
        public int Datos_academicosId { get; set; }
        public string Nivel { get; set; }
        public string Suspendido { get; set; }
        public int integranteId { get; set; }
        public Integrante integrante { get; set; }
        public List<Datos_academicos_razon> Datos_Familiares { get; } = new List<Datos_academicos_razon>();

    }

    public class Datos_academicos_razon
    {
        public int Datos_academicos_razonid { get; set; }
        public string Razon { get; set; }
        public int Datos_academicosId { get; set; }
        public Datos_academicos Datos_Academicos { get; set; }

    }

    public class Datos_eclesiasticos
    {
        public int Datos_eclesiasticosId { get; set; }
        public string Fecha_conversion { get; set; }
        public string Fecha_bautismo { get; set; }
        public string Fecha_aceptacion { get; set; }
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
        public int integranteId { get; set; }
        public Integrante integrante { get; set; }
        public List<Datos_eclesiasticos_disciplina> Datos_Eclesiasticos_Disciplinas { get; } = new List<Datos_eclesiasticos_disciplina>();

    }

    public class Datos_eclesiasticos_disciplina
    {
        public int Datos_eclesiasticos_disciplinaId { get; set; }
        public int cantidad { get; set; }
        public string causa { get; set; }
        public int Datos_eclesiasticosId { get; set; }
        public Datos_eclesiasticos datos_Eclesiasticos { get; set; }

    }


}