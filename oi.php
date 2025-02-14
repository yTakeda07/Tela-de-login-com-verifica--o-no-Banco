<?php

include 'conecta.php';
$senha = $_POST['senha'];
$nome = $_POST['nome'];



$consulta = "SELECT NR_SENHA FROM USUARIO WHERE NM_USUARIO = :nome";
$stmt = $conn->prepare($consulta);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->execute();   

if ($stmt->rowCount() > 0) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($senha == $row['NR_SENHA']) {

        session_start();
        $_SESSION['senha'] = $senha;
        $_SESSION['nome'] = $nome;
        $_SESSION['IsLogado'] = true;

        echo "<script>window.location.href = 'PP.html';</script>";
        exit();
    } else {
        echo "Senha incorreta.";
    }
} else {
    echo "Usuário não encontrado.";
}

 
?>