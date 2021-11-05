<?php

$serverName = 'localhost';
$userName = 'root';
$password = 'bcd127';
$dataBase = 'cadastro';

$comn = new mysqli($serverName, $userName, $password, $dataBase);

// echo '<pre>';
// var_dump($comn);
// echo '</pre>';

if ($comn->connect_error) {
    die("Connection error: " . $comn->connect_error);
}

return $conn;

?>