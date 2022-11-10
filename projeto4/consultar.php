<?php include_once'cabecalho.php';?>

    <h1>Consultar Cliente</h1>
    <hr>

<form action="consultar.php" method="get">
    Nome:<br/>
    <input type="text"
    placeholder="Digite o nome para busca"
    name="nome" required />
    <br/><br/>
    <input type="submit" value="Buscar"/>


</form>

<?php
if(isset($_GET["nome"])){
    $nome = $_GET["nome"];
    include_once'./conexao.php';
    $sql ="select * from cliente where nome like '".$nome."%'";
    $result= mysqli_query($con,$sql);
    if(mysqli_num_rows($result)>0){
?>
<table class="table">
    <tr>
        <td>Nome</td>
        <td>E-mail</td>
        <td>Telefone</td>
        <td>Data de Cadastro</td>
        <td>EDITAR</td>
        <td>EXCLUIR</td>
    </tr>

<?php
    while ($row = mysqli_fetch_array($result)){        
   ?>

   <tr>
   <td><?php echo $row["nome"]; ?></td>
   <td><?php echo $row["email"]; ?></td>
   <td><?php echo $row["telefone"]; ?></td>
   <td><?php echo $row["dtcadastro"]; ?></td>
   <td><a href="editar.php?id=<?php echo $row["idcliente"];?>"><img src="./img/edit.png"></a></td>
   <td><img src="./img/excluir.png"></td>
   
   </tr>

   <?php 
    }    
    }else{
        echo "Não existe cliente com este nome.";
    }
    }

 include_once'./rodape.php';
 
 ?>