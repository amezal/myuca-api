<?php

$mayor_a = 0;

if (isset($_GET['mayor_a'])) {
    $mayor_a = $_GET['mayor_a'];
}

$my_query = "SELECT * FROM coordinador WHERE `fecha_nacimiento` <= DATE_SUB(NOW(), INTERVAL $mayor_a YEAR);";
$result = $mysql->query($my_query);

$json = "[";
if ($mysql->affected_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $json = $json . json_encode($row);
        $json = $json . ",";
    }
    $json = substr(trim($json), 0, -1);
}
$json = $json . "]";
echo $json;
$result->close();
$mysql->close();
