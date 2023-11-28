<?php
    if(isset($_POST['submit'])) {

       include_once('config.php');

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $telefone = $_POST['telefone'];
       $genero = $_POST['genero'];
       $dataNascimento = $_POST['dataNascimento'];
       $cidade = $_POST['cidade'];
       $estado = $_POST['estado'];
       $endereco = $_POST['endereco'];

       $result = mysqli_query($conexao, "INSERT INTO usuarios VALUES ('', '$nome', '$email', '$telefone', '$genero', '$dataNascimento', '$cidade', '$estado', '$endereco')");  
    }


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css"/>
    <title>Formulario</title>
</head>
<body>
    <div class="box">
        <form action="formulario.php" method="post">
            <fieldset>
                <legend><b>Formulário Pacientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Nome completo</label>
                </div>
                <br>
                <p>Sexo</p>
                <input type="radio" name="genero" value="feminino" id="feminino" required>
                <label for="feminino">feminino</label>
                <br>
                <input type="radio" name="genero" value="masculino" id="masculino" required>
                <label for="masculino">masculino</label>
                <br>
                <input type="radio" name="genero" value="outro" id="outro" required>
                <label for="outro">outro</label>
                <br><br>

                <label for="dataNascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="dataNascimento" id="dataNascimento" required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit"/>
            </fieldset>
        </form>
    </div>
</body>
</html>