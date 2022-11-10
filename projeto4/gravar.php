<?php 
//PASSO - 1 Pegar os dados da tela
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$dtcadastro = date("Y-m-d");

//PASSO - 2 Montar conexão com BD
include_once'./conexao.php';

//PASSO - 3 Montar o SQL de gravar no BD
$sql="insert into cliente values(null,'".$nome."','".$email."','".$telefone."','".$dtcadastro."')";

//PASSO - 4 Mandar esse comando para o mysql
if(mysqli_query($con,$sql)){
    $msg ="Gravado com sucesso";

}
else{
    $msg ="Erro ao gravar";
}
    mysqli_close($con);
    echo "<script> alert('".$msg."');
    location.href='index.php';</script>";

?>