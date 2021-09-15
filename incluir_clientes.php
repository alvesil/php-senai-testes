<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php' ?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <title>OutletNet (Incluir Cliente)</title>
</head>

<body>
    <?php
        include_once "./conexao.php";
        $cpf = $_POST['cpfcliente'];
        $nome = $_POST['nomecliente'];
        $endereco = $_POST['enderecocliente'];
        $numero = $_POST['numeroenderecocliente'];
        $bairro = $_POST['bairrocliente'];
        $cidade = $_POST['cidadecliente'];
        $uf = $_POST['ufcliente'];
        $cep = $_POST['cepcliente'];
        $nascimento = $_POST['datanascimentocliente'];
        $sexo = $_POST['sexocliente'];
        $telefone = $_POST['celcliente'];
        $email = $_POST['emailcliente'];
        $salario = $_POST['salariocliente'];
        $cor = $_POST['corcliente'];
        $curso = $_POST['cursoscliente'];

        $sql = "INSERT INTO clientes(cpf, cep, nome, datanascimento, endereco, numeroendereco, bairro, cidade, uf, sexo, 
        celular, email, salario, cor, cursosfeitos) VALUES ('$cpf', '$cep', '$nome', '$nascimento', '$endereco', '$numero', '$bairro', '$cidade', '$uf',
        '$sexo', '$telefone', '$email', '$salario', '$cor', '$curso')";
            if (mysqli_query($conexao, $sql)) {
                echo '<div style="padding-top: 20%;" align="center"><h2 class="bg-success w-25 text-light">Cliente cadastrado com sucesso!.</h2></div>';
                echo '<br><br><div align="center" class="container"><div class="row"><div class="col"><a href="./clientes.php"><button class="btn btn-primary">Voltar</button></a></div></div></div>';
            }
            else{
                echo '<div style="padding-top: 20%;" align="center"><h2 class="bg-danger w-25 text-light">Cliente Não cadastrado!.</h2></div>';
                echo '<br><br><div align="center" class="container"><div class="row"><div class="col"><a href="./clientes.php"><button class="btn btn-primary">Voltar</button></a></div></div></div>';
                /*echo '<div style="margin-top: 300px;" align="center"><h2 class="text-danger">Ops!, Aconteceu algo de errado.</h2> <br>' . '<br>Erro: ' . $conexao->error . '<br>Query: ' . $sql . '</div>';
                echo '<br><br><div align="center" class="container"><div class="row"><div class="col"><a href="./clientes.php"><button class="btn btn-primary">Voltar</button></a></div></div></div>';
                */
            } 
        $conexao->close();
    ?>
</body>

</html>