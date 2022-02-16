
<?php

function conecta(){
    $dbHost = "localhost";
    $dbName = "danieol";
    $dbUsername = "root";
        
    $conexao = new mysqli($dbHost,$dbUsername,"",$dbName)or 
    die("error" . mysqli_errno($conexao));;
    return $conexao;
}

function salvar($conexao,$nome,$nome_do_pai,$nome_da_mae,$data_de_nascimento,$status){
    $sql ="insert into alunos(nome,nome_pai,nome_mae,data_nascimento,status)
            values('$nome','$nome_do_pai',$nome_da_mae,$data_de_nascimento,$status)";
    echo $sql;die();
    $select = mysqli_query($conexao,$sql);
    return $select;
}
?>      
