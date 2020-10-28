<?php

$servidor= "localhost";

$usuario= "root";

$senha="root";

$banco="olist";

$conexao= mysqli_connect($servidor,$usuario,$senha,$banco);

if(!$conexao){
    echo 'fonfon';

die("falha na conexao".mysqli_connect_error());    

    

}else{

  # echo 'deu bom';    

}

?>