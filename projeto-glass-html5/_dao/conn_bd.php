<?php
$local_server= 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'mysql';

// Create connection mysql
$conn =new  mysqli($local_server,$user_name,$password, $db_name);

// Check connection
if ($conn->connect_errno) {

    echo "Falha conexao BD";
}

echo "BD Connected successfully";

?>