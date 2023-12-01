<?php
    include_once('config.php');

    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM usuarios WHERE id = $id";
        $resultado = $conexao->query($sql);
        
        print_r($resultado);
        if($resultado->num_rows < 1) {
            header('location:index.php');
        }
        while($user_data = mysqli_fetch_assoc($resultado)) {
            $nome = $user_data['nome'];
            $email = $user_data['email'];
            $telefone = $user_data['telefone'];
            $genero = $user_data['genero'];
            $dataNascimento = $user_data['data_nascimento'];
            $cidade = $user_data['cidade'];
            $estado = $user_data['estado'];
            $endereco = $user_data['endereco'];
        }
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
    <a href="index.php">VOLTAR</a>
    <div class="box">
        <form action="saveEdit.php" method="post">
            <fieldset>
                <legend><b>Formulário Pacientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome; ?>"required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email; ?>" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone; ?>" required>
                    <label for="telefone" class="labelInput">Nome completo</label>
                </div>
                <br>
                <p>Sexo</p>
                <input type="radio" name="genero" value="feminino" id="feminino" value=" <?php echo($genero == 'feminino')? 'checked': ''?>" required>
                <label for="feminino">feminino</label>
                <br>
                <input type="radio" name="genero" value="masculino" id="masculino" <?php echo($genero == 'masculino')? 'checked': ''?> required>
                <label for="masculino">masculino</label>
                <br>
                <input type="radio" name="genero" value="outro" id="outro" value=" <?php echo($genero == 'outro')? 'checked': ''?>" required>
                <label for="outro">outro</label>
                <br><br>

                <label for="dataNascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="dataNascimento" id="dataNascimento" value="<?php echo $dataNascimento; ?>"required>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade; ?>"required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado; ?>" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco; ?>" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type= "hidden" name="id" value="<?php echo $id; ?>"/>
                <input type="submit" name="update" id="update"/>
            </fieldset>
        </form>
    </div>
</body>
</html>