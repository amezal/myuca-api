<?php

require_once "conexion.php";

switch($_SERVER["REQUEST_METHOD"]){
  case "GET":
    require_once "mostrar_coordinadores.php";
    break;
  case "POST":
    require_once "agregar_coordinador.php";
    break;
  case "PUT":
    require_once "editar_coordinador.php";
    break;
  case "DELETE":
    require_once "eliminar_coordinador.php";
    break;
  default:
    echo "El método no existe";
    break;
}
