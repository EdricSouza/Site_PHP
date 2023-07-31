<?php

include('conexao.php');

$name = $_GET['nome'];
$img_name = $_GET['img'];
$preco = $_GET['preco'];
$descr = $_GET['descr'];

$result = mysqli_query($conn, "INSERT INTO cards (name, img, price, description) values ('$name', '$img_name', '$preco', '$descr')");

?>