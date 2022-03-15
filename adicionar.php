<?php 
    include_once('php/funcoes.php');
    include_once('php/topo.php');
    include_once('php/menu.php');
?>
<hr>
<form action="adicionar.php" method="post">
        Nome = <input type="text" name="nome"><br>
        Nome do Pai = <input type="text" name="nome_do_pai" ><br>
        Nome da Mãe = <input type="text" name="nome_da_mae" ><br>
        Data de Nascimento = <input type="date" name="data_de_nascimento" ><br>
        <input type="hidden" name="status" value='0'>
        <input type="hidden" name='qrcodenumero' value='<?php echo uniqid() ?>'>
        <button type="submit">Enviar</button>
</form>
   
<?php
    if($_POST){
        $nome = $_POST['nome'];
        $nome_do_pai = $_POST['nome_do_pai'];
        $nome_da_mae = $_POST['nome_da_mae'];
        $data_de_nascimento = $_POST['data_de_nascimento'];
        $status = $_POST['status'];
        $qrcodenumero = $_POST['qrcodenumero'];


        $conexao = conecta();
        if($nome!=null && $nome_do_pai !=null && $nome_da_mae !=null && $data_de_nascimento != null && $status != null){
        $dados = salvar($conexao,$nome,$nome_do_pai,$nome_da_mae,$data_de_nascimento,$status,$qrcodenumero);}
        else{
            echo'<h2>Erro, Algum Campo não foi digitado!</h2>';
        }
    }

?>
<?php
        $conexao = conecta();

$sql = "select * from alunos";
$comando = mysqli_query($conexao,$sql);
while($dado = mysqli_fetch_assoc($comando)){
    echo $dado['nome']."<br>";
    echo $dado['nome_pai']."<br>";
    echo $dado['nome_mae']."<br>";
    echo $dado['data_nascimento']."<br>";
    echo $dado['status']."<br>";
    echo "<img src='https://chart.googleapis.com/chart?chs=500x500&cht=qr&chl=".$dado['codigo_qr']."'>";

}
    include_once('php/rodape.php');
?>