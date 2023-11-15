<?php

session_start();

if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"])))) {
    print "<script>location.href='index.html';</script>";
}

include('conexao.php');

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuarios
        WHERE usuario = '{$usuario}'
        AND senha = '{$senha}'";
        
        $result = $conn->query($sql) or die($conn->error);
    
        $row = $result->fetch_assoc();

        $qtd = $result->num_rows;

        if($qtd > 0) {
            $_SESSION["usuario"] = $usuario;
            $_SESSION["nome"] = $usuario;
            print "<script>location.href='main.php';</script>";
          
        } else {
            print "<script>alert('Usuário e/ou senha incorreto(s)!');</script>";
            print "<script>location.href='index.html';</script>";
        }
    