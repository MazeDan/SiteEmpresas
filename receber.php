<?php 
    include_once('php/topo.php');
    include_once('php/menu.php');
    include_once('coonexao.php');
    if($_GET){
        echo $_GET['qrcode'];
    }
    $conexao = conecta();
    $sql = "select * from teste";
    $comando = mysqli_query($conexao,$sql);
    while($dado = mysqli_fetch_assoc($comando)){
        echo $dado['a'];
    }
    include_once('rodape.php');

?>