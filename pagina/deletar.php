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
    <title>Deletar</title>
</head>
<body>
<form name="form" action="../php/delete.php" method="GET"> 

<?php while($row = mysqli_fetch_array($result)){ ?>
    <label for="nome"> Nome <br>
            <input type="hidden" name="id" value="<?=$row['id']?>" >
                <input type="text" name="nome" id="" value="<?=$row['name']?>" disabled="disable"> <br>
            </label> <br><br>
            <label for="img"> Link da imagem <br>
                <input type="text" name="img" id="" value="<?=$row['img']?>" disabled="disable"> <br>
            </label> <br><br>
            <label for="preco"> Preço <br>
                <input type="text" name="preco" id="" value="<?=$row['price']?>" disabled="disable"> <br>
            </label> <br><br>
            <label for="descr"> Descrição <br>
                <textarea name="descr" id="" cols="30" rows="10" disabled="disable"><?=$row['description']?></textarea> <br>
            </label>
            <label for="position">Posição
                <select name="position" id="" selected="<?=$row['position']?>" disabled="disable">
                    <option value="normal">Comum</option>
                    <option value="promocional">Promocional</option>
                    <option value="destaque">Destaque</option>
                </select>
            </label>
            <br>
            <input type="submit" value="Apagar">
            <input type="submit" value="VOLTAR" onClick="location.href=lista_cliente.php" >  <br />


<?php } ?>

</form>
</body>
</html>