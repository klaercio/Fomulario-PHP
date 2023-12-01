<?php
    include_once('config.php');

    if(isset($_POST['update'])) {

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $dataNascimento = $_POST['dataNascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
 
        $sqlUpdate = "UPDATE usuarios SET nome='$nome', email='$email', telefone='$telefone', genero='$genero', data_nascimento='$dataNascimento', cidade='$cidade', estado='$estado', endereco='$endereco' WHERE id = $id";

        $conexao->query($sqlUpdate);
    }
    
    header("Location: index.php");

?>