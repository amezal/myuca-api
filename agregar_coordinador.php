<?php

$body_raw = file_get_contents('php://input');
$body = json_decode($body_raw);
$nombres = $body->nombres;
$apellidos = $body->apellidos;
$fecha_nacimiento = $body->fecha_nacimiento;
$titulo = $body->titulo;
$email = $body->email;
$facultad = $body->facultad;

$my_query = "INSERT INTO `coordinador`(`nombres`, `apellidos`, `fecha_nacimiento`, `titulo`, `email`, `facultad`) 
        VALUES ('$nombres','$apellidos', '$fecha_nacimiento', '$titulo', '$email', '$facultad');";
$result = $mysql->query($my_query);
if ($mysql->affected_rows > 0) {
    $json = "Coordinador agregado correctamente";
} else {
    $json = "Error";
}
echo $json;
$mysql->close();
