<?php 
    include_once('php/topo.php');
    include_once('php/menu.php');
    include_once('php/funcoes.php');
    if($_GET){
        $codigo_qr = $_GET['qrcode'];
    }
    $conexao = conecta();
    
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
        <td>Ações</td>
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
        if($dado['status']==0){
            $status = "liberado";
        }else{$status = "Na escola";}
        
        echo "<td>".$status."</td>";
        echo "<td>".$dado['codigo_qr']."</td>";
        echo "<td>
        <a href='Entrada.php?id=".$dado['id']."'class='link-light btn btn-success btn-group-sm'>Entrada</a>
        <a href='Saida.php?id=".$dado['id']."'class='delete link-light btn btn-danger btn-group-sm' onclick='ConfirmDelete()'>Saida</a>
    </td>";
        echo "</tr>";
    }

    include_once('rodape.php');

?>