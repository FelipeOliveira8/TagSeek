<?php

include"mysqlconnect.php";

//recebe o request_id
$request_id = $_POST ['request_id'];

if($request_id == 1){

    mysqli_query($conexao, "insert into sala (numero_sala) values ('$nome');");

}else if($request_id == 2){

    mysqli_query($conexao, "insert into item (nome_tipo) values ('$nome');");

}else{
    echo "Indice inválido";
}

mysqli_close($conexao);

header("Location: main.php");

?>