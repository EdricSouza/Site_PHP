<?php

include('conexao.php');

$name = $_GET['nome'];
$img_name = $_GET['img'];
$preco = $_GET['preco'];
$descr = $_GET['descr'];
$position = $_GET['position'];

$result = mysqli_query($conn, "INSERT INTO cards (name, img, price, description, position) values ('$name', '$img_name', '$preco', '$descr', '$position')");

header('location: ../pagina/inserir.php');

?>