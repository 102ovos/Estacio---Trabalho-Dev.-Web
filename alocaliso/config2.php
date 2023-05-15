<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'db_alocaliso');

$conn = new MySQLi(HOST, USER, PASS, BASE);

// --> Checar conexao
//if($conexao->connect_errno){
//    echo "Erro";
//}
//else{
//    echo "Sucesso";
//}
?>