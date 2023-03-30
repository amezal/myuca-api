<?php

$body_raw = file_get_contents('php://input');
$body = json_decode($body_raw);
$id = $body->id;
$nombres = $body->nombres;
$apellidos = $body->apellidos;
$fecha_nacimiento = $body->fecha_nacimiento;
$titulo = $body->titulo;
$email = $body->email;
$facultad = $body->facultad;

$my_query = "UPDATE `coordinador` 
                 SET `nombres`='$nombres',`apellidos`='$apellidos',`fecha_nacimiento`='$fecha_nacimiento',`titulo`='$titulo',`email`='$email',`facultad`='$facultad' 
                 WHERE id = $id";
$result = $mysql->query($my_query);
if ($mysql->affected_rows > 0) {
    $json = "Coordinador editado correctamente";
} else {
    $json = "Ocurrió un error al editar el coordinador con id: $id";
}
echo $json;
$mysql->close();
