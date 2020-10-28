<?php
include_once ("../conexao.php");
$id=$_GET['id'];
$sql="delete from produtos where id=$id ";
$query= mysqli_query($conexao,$sql);
if($query){
    header("location: ../index.php");
    exit();  
        
    }
?>