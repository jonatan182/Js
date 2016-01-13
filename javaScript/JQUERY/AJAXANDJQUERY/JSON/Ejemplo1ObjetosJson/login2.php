<?php


$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];

$el_array = new stdClass();//array capaz de almacenar un objeto de tipo JSON

if ($el_usuario=="Jonatan") {
  
  	/*-----Creacion De Un JSON----------*/
	$el_array->Nombre = "Jonatan";//lo ideal es hacer la consulta con una BD y almacenarlos en el array, en este caso lo hacemos sin consulta a BD
	$el_array->Apellido = "Velandia";
	$el_array->Edad = "22";
	$json = json_encode($el_array);//condificamos el json que tenemos almacenado en el array utilizando la funcion de php json_encode
	echo $json;//devolvemos lo que tenemos almacenado en el objeto json
}else if($el_usuario=="Maria"){
	$el_array->Nombre="Maria";
	$el_array->Apellido="Vanegas";
	$el_array->Edad="49";
	$json = json_encode($el_array);
	echo $json;

}else if($el_usuario=="Andrea"){
	$el_array->Nombre="Andrea";
	$el_array->Apellido="Vasquez"; 
	$el_array->Edad="22";
	$json = json_encode($el_array);
	echo $json;
}



?>