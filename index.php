<?php 
    include_once('config.php');

    $sql = "SELECT * FROM usuarios ORDER BY id ASC";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./index.css"/>
</head>
<body>
        <div class="tabela">
            <table>
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NOME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">TELEFONE</th>
                        <th scope="col">GENERO</th>
                        <th scope="col">DATA NASCIMENTO</th>
                        <th scope="col">CIDADE</th>
                        <th scope="col">ESTADO</th>
                        <th scope="col">ENDEREÇO</th>
                        <th scope="col">...</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($user_data = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>". $user_data['id']."</td>";
                            echo "<td>". $user_data['nome']."</td>";
                            echo "<td>". $user_data['email']."</td>";
                            echo "<td>". $user_data['telefone']."</td>";
                            echo "<td>". $user_data['genero']."</td>";
                            echo "<td>". $user_data['data_nascimento']."</td>";
                            echo "<td>". $user_data['cidade']."</td>";
                            echo "<td>". $user_data['estado']."</td>";
                            echo "<td>". $user_data['endereco']."</td>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
</body>
</html>