<?php 
include('conexao.php');

$name = $_GET['nome'];
$img_name = $_GET['img'];
$preco = $_GET['preco'];
$descr = $_GET['descr'];

$result = mysqli_query($conn, "UPDATE cards SET name='$name',  img='$img_name', price='$preco', description='$descr' WHERE id='$id'");

header('location: ../pagina/listar.php');
 
?>

<a href="lista_cliente.php"> VOLTAR A PÁGINA PRINCIPAL </a> 
