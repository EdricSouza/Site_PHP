<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Lista</title>
</head>

<body>
<?php

include("../php/conexao.php");
$result = mysqli_query($conn, "SELECT * FROM cards");

?>

<table width="900" border="1">
  <tr>
    <th scope="col">&nbsp; ID</th>
    <th scope="col">&nbsp; Nome</th>
    <th scope="col">&nbsp; Link da Imagem</th>
    <th scope="col">&nbsp; Preço</th>
    <th scope="col">&nbsp; Descrição</th>
  </tr>
  <?php while($row=mysqli_fetch_array($result)){ ?>
  <tr>
    <td>&nbsp; <?= $row["id"]; ?></td>
    <td>&nbsp; <?= $row["name"]; ?></td>
    <td>&nbsp; <?= $row["img"]; ?></td>
    <td>&nbsp; <?= $row["price"]; ?></td>
    <td>&nbsp; <?= $row["description"]; ?></td>
    <td>&nbsp; 
    	<a href="altera.php?id= <?= $row["id"]; ?>"> <div >Alterar </div> </a>
        <a href="delete.php?id= <?= $row["id"]; ?>"> <div > Deletar </div> </a>        
    </td>
  </tr>
  <?php } ?>
</table>
<br /> <br /> <br /> 
<div align="center">
<a href="inserir.php"> INSERIR NOVO CADASTRO </a> 
</div>	
</body>
</html>