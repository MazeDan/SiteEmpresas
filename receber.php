<?php 
    include_once('php/topo.php');
    include_once('php/menu.php');
    include_once('php/funcoes.php');
    if($_GET){
        $codigo_qr = $_GET['qrcode'];
    }
    $dbHost = "localhost";
    $dbName = "daniel";
    $dbUsername = "root";
        
    $conexao = new mysqli($dbHost,$dbUsername,"",$dbName);
    $sql = "select * from teste";
    $comando = mysqli_query($conexao,$sql);
    
    $dados = pesquisa($conexao,7,$codigo_qr,'alunos');

?>
<table class="table table-dark table-hover shadow-lg p-3 mb-5 bg-body rounded">
    <tr style="width:100%" class="text-center fs-5 fw-bold">
        <tread>
        <td scope="col" >Id</td>
        <td scope="col" >Nome</td>
        <td>Nome do Pai</td>
        <td>Nome da Mãe</td>
        <td>Data de Nascimento</td>
        <td>Status</td>
        <td>CodigoQr</td>



    </tr>
    </tread>
<?php
    while($dado = mysqli_fetch_assoc($dados)){
        echo "<tr class='text-center align-middle'>";
        echo "<td>".$dado['id']."</td>";
        echo "<td>".$dado['nome']."</td>";
        echo "<td>".$dado['nome_pai']."</td>";
        echo "<td>".$dado['nome_mae']."</td>";
        echo "<td>".$dado['data_nascimento']."</td>";
        echo "<td>".$dado['status']."</td>";
        echo "<td>".$dado['codigo_qr']."</td>";
        echo "</tr>";
    }

    include_once('rodape.php');

?>