
<?php

function conecta(){
    $dbHost = "localhost";
    $dbName = "daniel";
    $dbUsername = "root";
        
    $conexao = new mysqli($dbHost,$dbUsername,"",$dbName)or 
    die("error" . mysqli_errno($conexao));;
    return $conexao;
}

function salvar($conexao,$nome,$nome_do_pai,$nome_da_mae,$data_de_nascimento,$status,$codigo_qr){
    $sql ="insert into alunos(nome,nome_pai,nome_mae,data_nascimento,status,codigo_qr)
            values('$nome','$nome_do_pai','$nome_da_mae','$data_de_nascimento','$status','$codigo_qr' )";
    $select = mysqli_query($conexao,$sql);
    return $select;
}

function pesquisa($conexao,$campo,$informacao,$local){
    $c = "";
  
       if($local=='alunos'){
       switch($campo){
       case 0: $c = 'id';
       break;
       case 1: $c = 'nome';
       break;
       case 3: $c = 'nome_pai';
       break;
       case 4: $c = 'nome_mae';
       break;
       case 5: $c = 'data_de_nascimento';
       break;
       case 6: $c = 'status';
       break;
       case 7: $c = 'codigo_qr';
       break;
           }
       }
   
       $sql = "select * from $local where $c like '%$informacao%' ";
   
       $select = mysqli_query($conexao,$sql); // comando para executar sql
       return $select;
       }
?>      
