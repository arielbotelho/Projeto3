<?php 
//PASSO - 1 Pegar os dados da tela
$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$dtcadastro = date("Y-m-d");

//PASSO - 2 Montar conexão com BD
include_once'./conexao.php';

//PASSO - 3 Montar o SQL de gravar no BD




?>
