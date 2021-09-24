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
    include_once 'conexao.php';
    $cpf = $_POST['cpf'];
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


    // testa se existe o cpf escolhido
    $sql = "SELECT * FROM clientes WHERE cpf = '$cpf'";
    //echo $sql;
    if ($resultado = mysqli_query($conexao,$sql)) {

        if ($campo = mysqli_fetch_array($resultado)) {
            // se achou achou, é para atualizar
            // update
            $sql = "UPDATE clientes SET nome = '$nome', endereco = '$endereco', numeroendereco = '$numero', bairro = '$bairro', cidade = '$cidade', uf = '$uf',
            cep = '$cep', datanascimento = '$nascimento', sexo = '$sexo', celular = '$telefone', email = '$email', salario = '$salario', cor = '$cor',
            cursosfeitos = '$curso' WHERE cpf = '$cpf'";
            //echo $sql;
            if (mysqli_query($conexao,$sql)) {
                echo '<div align="center" style="margin-top:250px;">';  
                echo "<h1>Cliente atualizado com sucesso!</h1><br>";
                echo '<a href="./clientes.php"><button class="btn" id="btnsub">Voltar p/ Clientes</button></a>';
                echo '<a style="margin-left: 8px;" href="./relatorios.php"><button class="btn" id="btncancel">Voltar p/ Relatórios</button></a>';
                echo "</div>";
            }
            else
            {
                echo '<div align="center" style="margin-top:250px;">';  
                echo "<h1>Algo de errado aconteceu!</h1>";
                echo '<a href="./clientes.php"><button>Voltar</button></a>';
                echo $conexao->error . '<br>' . $sql;
                echo "</div>";
            }
        }
        else
        {
            // se não achou, é para incluir
            // insert 
            $sql = "INSERT INTO clientes
            (cpf, nome, endereco, numeroendereco, bairro, cidade, uf, cep, datanascimento, sexo, celular, email, salario, cor, cursosfeitos) 
            VALUES 
            ('$cpf', '$nome', '$endereco', '$numero', '$bairro', '$cidade', '$uf', '$cep', '$nascimento', '$sexo', '$telefone', '$email', '$salario', '$cor', '$curso')";
            //echo $sql;
            if (mysqli_query($conexao,$sql)) {
                echo '<div align="center" style="margin-top:250px;">';  
                echo "<h1>Cliente cadastrado com sucesso!</h1>";
                echo '<a href="./clientes.php"><button class="btn" id="btnsub">Voltar p/ Clientes</button></a>';
                echo '<a style="margin-left: 8px;" href="./relatorios.php"><button class="btn" id="btncancel">Voltar p/ Relatórios</button></a>';
                echo "</div>";
            }
            else
            {
                echo '<div align="center" style="margin-top:250px;">';  
                echo "<h1>Algo de errado aconteceu!</h1>";
                echo '<a href="./clientes.php"><button>Voltar</button></a>';
                echo $conexao->error . '<br>' . $sql;
                echo "</div>";
            
            }
        }
    }
    $conexao->close();
    ?>
    <br>
    
</body>
<?php include_once "scripts.php "; ?>
</html>