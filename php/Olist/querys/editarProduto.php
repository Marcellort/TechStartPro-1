<?php

include_once ("../conexao.php");

$id=$_POST['id'];

$name=$_POST['name'];

$desc=$_POST['desc'];

$value=$_POST['value'];

$cat=$_POST['cat'];

$sql="UPDATE `produtos` SET `nome`='$name',`descricao`='$desc',`valor`='$value',`categorias`='$cat' WHERE id='$id'";

$query= mysqli_query($conexao,$sql);

if($query){

    header("location: ../index.php");

    exit();

}

?>