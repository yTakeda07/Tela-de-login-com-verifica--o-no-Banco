<?php


$username = "root";
$password = "";
$conexao = 'mysql:host=localhost;port=3306;dbname=testedd';

try {

$conn = new PDO($conexao,$username, $password);

} catch(PDOException $e){
    echo "ERROR: ".$e->getMessage();
}





?>