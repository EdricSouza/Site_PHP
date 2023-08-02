<?php 

include("../php/conexao.php");
$id = $_GET['id'];
 
$result = mysqli_query($conn, "SELECT * FROM cards WHERE id='$id'");
 
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera</title>
</head>
<body>
<form name="form" action="../php/update.php" method="post"> 

<?php while($row = mysqli_fetch_array($result)){ ?>
    <input type="text" name="nome" value=" <?= $row["name"]; ?>" /><br />
    <input type="text" name="img" value="<?= $row["img"]; ?>" /><br />
    <input type="text" name="preco" value=" <?= $row["price"]; ?>" /><br />
    <input type="text" name="descr" value="<?= $row["description"]; ?>" /><br />

    <input type="submit" value="SALVAR" > <br />
    <input type="submit" value="VOLTAR" onClick="location.href=lista_cliente.php" >  <br />


<?php } ?>

</form>
</body>
</html>