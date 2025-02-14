<?php


$username = "root";
$password = "usbw";
$conexao = 'mysql:host=localhost;port=3307;dbname=testedd';

try {

$conn = new PDO($conexao,$username, $password);

} catch(PDOException $e){
    echo "ERROR: ".$e->getMessage();
}





?>