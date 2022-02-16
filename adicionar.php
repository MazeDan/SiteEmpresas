<?php 
    include_once('php/topo.php');
    include_once('php/menu.php');
    include_once('php/funcoes.php');
?>
    <form action="adicionar.php" method="post">
        Nome = <input type="text" name="nome"><br>
        Nome do Pai = <input type="text" name="nome_do_pai" ><br>
        Nome da Mãe = <input type="text" name="nome_da_mae" ><br>
        Data de Nascimento = <input type="date" name="data_de_nascimento" ><br>
        <input type="hidden" name="status" value='0'>
        <button type="submit">Enviar</button>
    </form>

<?php
    if($_POST){
        $nome = $_POST['nome'];
        $nome_do_pai = $_POST['nome_do_pai'];
        $nome_da_mae = $_POST['nome_da_mae'];
        $data_de_nascimento = $_POST['data_de_nascimento'];
        $status = $_POST['status'];

        $conexao = conecta();
        $dados = salvar($conexao,$nome,$nome_do_pai,$nome_da_mae,$data_de_nascimento,$status);
        if($dados == null) echo "erro"; else echo 'dados enviados';
    }

    $sql = "select * from alunos";
    $comando = mysqli_query($conexao,$sql);
    while($dado = mysqli_fetch_assoc($comando)){
        echo '<br>'.$dado['nome'].'<br>';
        echo '<br>'.$dado['nome_pai'].'<br>';
        echo '<br>'.$dado['nome_mae'].'<br>';
        echo '<br>'.$dado['data_de_nascimento'].'<br>';
        echo '<br>'.$dado['status'].'<br>';

    }
?>

<?php
    include_once('rodape.php');

?>