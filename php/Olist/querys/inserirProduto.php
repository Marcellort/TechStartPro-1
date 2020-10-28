<?php

include_once ("../conexao.php");

$name=$_POST['name'];

$desc=$_POST['desc'];

$cat=$_POST['cat'];

$value=$_POST['value'];


$sql="INSERT INTO `produtos`(`nome`, `descricao`, `valor`, `categorias`) VALUES ('$name','$desc','$value','$cat')";

$query= mysqli_query($conexao,$sql);

if($query){

    header("location: ../index.php");

    exit();

}
else{
    echo"aaa";
}

?>