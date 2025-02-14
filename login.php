<?php 
    
    session_start();
    if(isset($_SESSION['IsLogado'])){
    $senha =  $_SESSION['senha'];
    $nome = $_SESSION['nome'];
    $IsLogado = $_SESSION['IsLogado'];
    if($IsLogado == true){
    echo($nome." - ".$senha." - USER");





} else{ echo "<script>window.location.href = 'index.html';</script>";};
} else{ echo "<script>window.location.href = 'index.html';</script>";}