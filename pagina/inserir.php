<?php

include('../php/conexao.php')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição</title>
</head>
<body>
    <form action="../php/insert.php" method="get">
            <label for="nome"> Nome <br>
                <input type="text" name="nome" id=""> <br>
            </label> <br><br>
            <label for="img"> Link da imagem <br>
                <input type="text" name="img" id=""> <br>
            </label> <br><br>
            <label for="preco"> Preço <br>
                <input type="text" name="preco" id=""> <br>
            </label> <br><br>
            <label for="descr"> Descrição <br>
                <textarea name="descr" id="" cols="30" rows="10"></textarea> <br>
            </label>
            <label for="position">Posição
                <select name="position" id="">
                    <option value="normal">Comum</option>
                    <option value="promocional">Promocional</option>
                    <option value="destaque">Destaque</option>
                </select>
            </label>
            <input type="submit" value="Enviar">
    </form>
</body>
</html>