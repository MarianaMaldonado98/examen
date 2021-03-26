<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class productos
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	//Implementamos un método para insertar registros
	public function insertar($nombre,$descripcion,$tipo,$marca,$precio,$imagen)
	{
		$sql="INSERT INTO productos (nombre,descripcion,tipo,marca,precio,imagen,condicion)
		VALUES ('$nombre','$descripcion','$tipo','$marca','$precio','$imagen','1')";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para editar registros
	public function editar($id_producto,$nombre,$descripcion,$tipo,$marca,$precio,$imagen)
	{
		$sql="UPDATE productos SET nombre='$nombre',descripcion='$descripcion',tipo='$tipo',marca='$marca',precio='$precio',imagen='$imagen' WHERE id_producto='$id_producto'";
		
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para desactivar registros
	public function desactivar($id_producto)
	{
		$sql="UPDATE productos SET condicion='0' WHERE id_producto='$id_producto'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para activar registros
	public function activar($id_producto)
	{
		$sql="UPDATE productos SET condicion='1' WHERE id_producto='$id_producto'";
		return ejecutarConsulta($sql);
	}

	//Implementamos un método para eliminar registros
	public function eliminar($id_producto)
	{
		$sql="DELETE FROM productos WHERE id_producto='$id_producto'";
		return ejecutarConsulta($sql);
	}

	//Implementar un método para mostrar los datos de un registro a modificar
	public function mostrar($id_producto)
	{
		$sql="SELECT * FROM productos WHERE id_producto='$id_producto'";
		return ejecutarConsultaSimpleFila($sql);
	}

	//Implementar un método para listar los registros
	public function listar()
	{
		$sql="SELECT * FROM productos";
	 
		return ejecutarConsulta($sql);		
	}
}

?>