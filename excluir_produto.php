<?php

include 'conecta.php';

$nome = $_POST['nome'];


    $inserir = "INSERT into produto values(null,'".$nome."');";
    $exibir = "SELECT NM_PRODUTO, CD_PRODUTO from produto;";
    $delete = "DELETE FROM produto WHERE NM_PRODUTO = '".$nome."';";
    $conn->query($delete);
    echo "<br>".$nome." foi excluido da lista";

echo "<br><br>";    
$stmt = $conn->query($exibir);

if ($stmt->rowCount() > 0) {
    // Fetch and display each row
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Codigo: " . $row['CD_PRODUTO'] . "<br>";
        echo "Nome: " . $row['NM_PRODUTO'] . "<br><br>";
        

    }
    
} else {
    echo "Nenhum resultado encontrado.";
}

 
?>