<?php 
include('conexao.php');

$id = $_GET['id'];
$name = $_GET['nome'];
$img_name = $_GET['img'];
$preco = $_GET['preco'];
$descr = $_GET['descr'];
$position = $_GET['position'];

$result = mysqli_query($conn, "UPDATE cards SET name='$name',  img='$img_name', price='$preco', description='$descr', position='$position' WHERE id='$id'");

if($result==true) {
    echo "Alteração feita com sucesso";
    header('location: ../pagina/listar.php');
}else{
    echo "Erro na alteração";
}


 
?>

<a href="lista_cliente.php"> VOLTAR A PÁGINA PRINCIPAL </a> 
