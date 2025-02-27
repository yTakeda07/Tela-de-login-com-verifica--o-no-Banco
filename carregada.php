<?php

include 'conecta.php';





    $exibir = "SELECT NM_PRODUTO, CD_PRODUTO from produto;";
    // $conn->query($inserir);

echo "<br><br>";    
$stmt = $conn->query($exibir);

if ($stmt->rowCount() > 0) {
    // Fetch and display each row
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "Codigo: " . $row['CD_PRODUTO'] . "<br>";
        echo "Nome: " . $row['NM_PRODUTO'] . "
        <input type='button' onclick='apagar(this)' class='".$row['NM_PRODUTO']."' value='Apagar'>
        <input type='button' onclick='editar(this)' class='".$row['NM_PRODUTO']."' value='Editar'>
       <br><br>";
        

    }
    
} else {
    echo "Nenhum resultado encontrado.";
}

 
?>