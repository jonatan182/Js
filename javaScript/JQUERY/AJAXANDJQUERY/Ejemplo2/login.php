<?php

$contra_entrar="1234";
$usu_entrar="Jonatan";

$el_usuario=isset($_GET['usuario']) ? $_GET['usuario'] : $_POST['usuario'];//recuperamos la informacion que nos enviaron por medio de la funcion get(), indicando el nombre del campo 'usuario' y 'contra'
$la_contra=isset($_GET['contra']) ? $_GET['contra'] : $_POST['contra'];

if ($el_usuario==$usu_entrar && $la_contra==$contra_entrar) {
  echo 'autorizado';
} else {
  echo 'fallo';
}



?>