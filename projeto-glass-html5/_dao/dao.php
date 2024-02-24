<?php
$end_bd='localhost';
$user_name_db='root';
$senha_db='';
$name_db='cadastro';
$conexao=new mysqli($end_bd,$user_name_db,$senha_db,$name_db);

if($conexao->connect_errno){
    echo "Erro";
}else{
    echo "conexao OK";
}

?>