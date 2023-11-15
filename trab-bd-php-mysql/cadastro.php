<?php
    include("conexao.php");
   
    $nome = $_POST["nome"];
    $usuario = ($_POST["usuario"]);
    $email = $_POST["email"];
    $senha = ($_POST["senha"]);
       
      $sql = "INSERT INTO usuarios (nome, usuario, email, senha)
         VALUES (
            '{$nome}', '{$usuario}', '{$email}', '{$senha}')";
       $res = $conn->query($sql);    

    if( $res==true){
      print "<script>alert('Inserido com sucesso!');</script>";
      header("location:index.html"); 
    }
    else{
      print "<script>alert('Não foi possível cadastrar');</script>";
      header("location:index.html"); 
    }

?>