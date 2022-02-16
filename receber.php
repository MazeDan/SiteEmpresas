<?php 
    include_once('php/topo.php');
    include_once('php/menu.php');
    include_once('php/funcoes.php');
    if($_GET){
        echo $_GET['qrcode'];
    }
    $dbHost = "localhost";
    $dbName = "daniel";
    $dbUsername = "root";
        
    $conexao = new mysqli($dbHost,$dbUsername,"",$dbName);
    $sql = "select * from teste";
    $comando = mysqli_query($conexao,$sql);
    while($dado = mysqli_fetch_assoc($comando)){
        echo $dado['aa'];
    }
    include_once('rodape.php');

?>