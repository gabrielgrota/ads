<?php
  
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastros');

    $conn = new MySQLi(HOST, USER, PASS, BASE);

    if($conn->connect_error){
        die("Falha ao concectar o bando de dados: " . $conn->connect_error);
    }
?>