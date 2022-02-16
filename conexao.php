
<?php
function conecta(){
    $conexao = mysqli_connect("localhost","root","","daniel") or 
    die("error" . mysqli_errno($conexao));;
    return $conexao;   
}
  
?>  
