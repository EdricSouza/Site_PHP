<?php

    $id = $_GET['id'];
	
	
	include("conexao.php");
 
    $result = mysqli_query($conn, "DELETE FROM cards WHERE id='$id'");
    
    if($result){
        echo "CADASTRO EXCLUÍDO COM SUCESSO !!!!!!!!!!";
        header('location: ../pagina/listar.php');
    }else{
        echo "Erro na alteração";
    }

?>