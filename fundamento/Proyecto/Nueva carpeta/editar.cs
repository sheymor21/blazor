
						break;
					case "4":
						Console.Clear();
						Console.WriteLine("Lista de contactos");
						 todos = mdcont.obtenercontacto();
						Console.WriteLine("nombre completo \t\t fecha de nacimiento \t sexo \t telefono \t cedula \t peso \t altura \t salario \t correo electronico");
						foreach(contacto cant in todos)
						{
							Console.WriteLine("{0} {1} \t\t {2} \t {3} \t {4} \t {5} \t {6} \t {7} \t\t {8} \t {9}",cant.nombre,cant.apellido,cant.fechadenacimiento,cant.sexo,cant.telefono,cant.cedula,cant.peso,cant.altura,cant.salario,cant.correoelectronico);
							
						}Console.ReadKey();
	
	while(editar){
		Console.Clear();
		Console.WriteLine("1 - editar nombre");
		Console.WriteLine("2 - editar apellido");
		Console.WriteLine("3 - editar fecha de nacimiento");
		Console.WriteLine("4 - editar sexo");
		Console.WriteLine("5 - editar telefono");
		Console.WriteLine("6 - editar cedula");
		Console.WriteLine("7 - editar peso");
		Console.WriteLine("8 - editar altura");
		Console.WriteLine("9 - editar salario");
		Console.WriteLine("10 - editar correo electronico");
		switch(cambiar){
			
			case "1":
			Console.Clear
			
			
		}
		
		
	}
	
	
}