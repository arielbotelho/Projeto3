<?php include_once'cabecalho.php';?>

<?php 
$id = $_GET["id"];
include_once'./conexao.php';
$sql= "select * from where idcliente =".$id;

$result = mysql_query($con,$sql);
$row = mysqli_fetch_array($result);

?>
    <h1>Atualização Cliente</h1>
    <hr>
    <form action="atualizar.php" method="post">
    Nome:<br/>
    <input type="text" name="nome" value="<?php echo $row["nome"];"" ?> />
    <br/><br/>
    E-mail:<br/>
    <input type="text" name="email"/>
    <br/><br/>
    Telefone:<br/>
    <input type="text" name="telefone"/>
    <br/><br/>
    <input type="submit" value="atualizar" />
    </form>
 <?php include_once'rodape.php';?>