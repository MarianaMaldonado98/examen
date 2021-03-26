<?php 
require_once "../modelos/Productos.php";

$productos=new Productos();

$id_producto=isset($_POST["id_producto"])? limpiarCadena($_POST["id_producto"]):"";
$nombre=isset($_POST["nombre"])? limpiarCadena($_POST["nombre"]):"";
$descripcion=isset($_POST["descripcion"])? limpiarCadena($_POST["descripcion"]):"";
$marca=isset($_POST["marca"])? limpiarCadena($_POST["marca"]):"";
$tipo=isset($_POST["tipo"])? limpiarCadena($_POST["tipo"]):"";
$precio=isset($_POST["precio"])? limpiarCadena($_POST["precio"]):"";
$imagen=isset($_POST["imagen"])? limpiarCadena($_POST["imagen"]):"";


switch ($_GET["op"]){
	case 'guardaryeditar':

		if (!file_exists($_FILES['imagen']['tmp_name']) || !is_uploaded_file($_FILES['imagen']['tmp_name']))
		{
			$imagen=$_POST["imagenactual"];
		}
		else 
		{
			$ext = explode(".", $_FILES["imagen"]["name"]);
			if ($_FILES['imagen']['type'] == "" || $_FILES['imagen']['type'] == "image/jpeg" || $_FILES['imagen']['type'] == "image/png")
			{
				$numero_aleatorio = rand(1,100);
				$imagen = 'Imagen' .$numero_aleatorio. '.' . end($ext);
				move_uploaded_file($_FILES["imagen"]["tmp_name"], "../files/productos/" . $imagen);			}
		}
		
		if (empty($id_producto)){
			$rspta=$productos->insertar($nombre,$descripcion,$tipo,$marca,$precio,$imagen);
			echo $rspta ? "Producto registrado" : "Producto no registrado" ;
		}
		else {
			$rspta=$productos->editar($id_producto,$nombre,$descripcion,$tipo,$marca,$precio,$imagen);
			echo $rspta ? "Producto actualizado" : "Producto no se pudo actualizar";
		}
	break;

	case 'desactivar':
		$rspta=$productos->desactivar($id_producto);
 		echo $rspta ? "Producto desactivado" : "Producto no se puede desactivar";
 		break;
	break;

	case 'activar':
		$rspta=$productos->activar($id_producto);
 		echo $rspta ? "Producto activado" : "Producto no se puede activar";
 		break;
	break;

	case 'eliminar':
		$rspta=$productos->eliminar($id_producto);
 		echo $rspta ? "Producto eliminado" : "Producto no se puede eliminar";
 		break;
	break;

	case 'mostrar':
		$rspta=$productos->mostrar($id_producto);
 		//Codificar el resultado utilizando json
 		echo json_encode($rspta);
 		break;
	break;

	case 'listar':
		$rspta=$productos->listar();
 		//Vamos a declarar un array
 		$data= Array();

 		while ($reg=$rspta->fetch_object()){
 			$data[]=array(
 				"0"=>($reg->condicion)?'<button class="btn btn-info" onclick="mostrar('.$reg->id_producto.')"><i class="material-icons">create</i></button>'.
 					'<button class="btn btn-warning" onclick="desactivar('.$reg->id_producto.')"><i class="material-icons">block</i></button>'.
 					'<button class="btn btn-danger" onclick="eliminar('.$reg->id_producto.')"><i class="material-icons">delete_forever</i></button>' :
 					'<button class="btn btn-info" onclick="mostrar('.$reg->id_producto.')"><i class="material-icons">create</i></button>'.
 					'<button class="btn btn-success" onclick="activar('.$reg->id_producto.')"><i class="material-icons">check_circle_outline</i></button>'.
 					'<button class="btn btn-danger" onclick="eliminar('.$reg->id_producto.')"><i class="material-icons">delete_forever</i></button>',
 				"1"=>$reg->nombre,
 				"2"=>$reg->descripcion,
 				"3"=>$reg->tipo,
 				"4"=>$reg->marca,
 				"5"=>$reg->precio,
 				"6"=>"<img src='../files/productos/".$reg->imagen."' height='50px' width='50px' >"
 				// "9"=>"<a href='../files/documentos/".$reg->docrfc."'>".$reg->docrfc."<a>",
 				);
 		}
 		$results = array(
 			"sEcho"=>1, //Información para el datatables
 			"iTotalRecords"=>count($data), //enviamos el total registros al datatable
 			"iTotalDisplayRecords"=>count($data), //enviamos el total registros a visualizar
 			"aaData"=>$data);
 		echo json_encode($results);

	break;
}
?>
