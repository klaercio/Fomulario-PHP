<?php 
    include_once('config.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id=$id";

    $conexao->query($sql);

    header("location: index.php");
?>