using System;
using System.Collections.Generic;
using System.IO;
using System.Runtime.Serialization.Formatters.Binary;
using System.Runtime.Serialization;

[Serializable]
public class contacto{
	public string nombre;
	public string apellido;
	public DateTime fechadenacimiento;
	public string sexo;
	public long telefono;
	public string cedula;
	public int peso;
	public int  altura;
	public int salario;
	public string correoelectronico;
	
}


[Serializable]
public class manejadorcontacto{
	private List<contacto> todos = new List<contacto>();
 
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