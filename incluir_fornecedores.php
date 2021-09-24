<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './links.php'?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <title>OutletNet (Incluir Fornecedor)</title>
</head>

<body>
<?php
        include_once "./conexao.php";
        $cnpj = $_POST['cnpj'];
        $razao = $_POST['razao'];
        $telefone1 = $_POST['telefone1fornecedor'];
        $telefone2 = $_POST['telefone2fornecedor'];
        $celular = $_POST['celularfornecedor'];
        $wpp = $_POST['whatsappfornecedor'];
        $email_fornecedor = $_POST['emailfornecedor'];
        $data_compra = $_POST['datacadastrofornecedor'];
        $data_venda = $_POST['dataultcompfornecedor'];
        $saldo_compra = $_POST['saldocompradofornecedor'];
        $status = $_POST['statusfornecedor'];
        $obs = $_POST['observacaofornecedor'];
        $banco = $_POST['bancofornecedor'];
        $ag = $_POST['agenciafornecedor'];
        $conta = $_POST['contafornecedor'];

        // testa se existe o cpf escolhido
    $sql = "SELECT * FROM fornecedores WHERE cnpj = '$cnpj'";
    //echo $sql;
    if ($resultado = mysqli_query($conexao,$sql)) {

        if ($campo = mysqli_fetch_array($resultado)) {
            // se achou achou, é para atualizar
            // update
            $sql = "UPDATE fornecedores SET cnpj = '$cnpj', razao = '$razao', telefone1 = '$telefone1', telefone2 = '$telefone2', celular = '$celular', whatsapp = '$wpp',
            email = '$email_fornecedor', datacompra = '$data_compra', datavenda = '$data_venda', saldocompras = '$saldo_compra', sts = '$status', observacao = '$obs', banco = '$banco',
            agencia = '$ag', conta = '$conta' WHERE cnpj = '$cnpj'";
            //echo $sql;
            if (mysqli_query($conexao,$sql)) {
                echo '<div align="center" style="margin-top:250px;">';  
                echo "<h1>Fornecedor atualizado com sucesso!</h1><br>";
                echo '<a href="./fornecedor.php"><button class="btn" id="btnsub">Voltar p/ Fornecedores</button></a>';
                echo '<a style="margin: 8px;" href="./relatorios.php"><button class="btn" id="btncancel">Voltar p/ Relatórios</button></a>';
                echo "</div>";
            }
            else
            {
                echo '<div align="center" style="margin-top:250px;">';  
                echo "<h1>Algo de errado aconteceu!</h1>";
                echo '<a href="./fornecedor.php"><button class="btn" id="btnsub">Voltar</button></a><br>';
                //echo $conexao->error . '<br>' . $sql;
                echo "</div>";
            }
        }
        else
        {
            // se não achou, é para incluir
            // insert 
            $sql = "INSERT INTO fornecedores
            (cnpj, razao, telefone1, telefone2, celular, whatsapp, email, datacompra, datavenda, saldocompras, sts, observacao, banco, agencia, conta) 
            VALUES 
            ('$cnpj', '$razao', '$telefone1', '$telefone2', '$celular', '$wpp', '$email_fornecedor', '$data_compra', '$data_venda', '$saldo_compra', '$status', '$obs', '$banco', '$ag', '$conta')";
            //echo $sql;
            if (mysqli_query($conexao,$sql)) {
                echo '<div align="center" style="margin-top:250px;">';  
                echo "<h1>Fornecedor cadastrado com sucesso!</h1>";
                echo '<a href="./fornecedor.php"><button class="btn" id="btnsub">Voltar p/ Fornecedores</button></a>';
                echo '<a style="margin: 8px;" href="./relatorios.php"><button class="btn" id="btncancel">Voltar p/ Relatórios</button></a>';
                echo "</div>";
            }
            else
            {
                echo '<div align="center" style="margin-top:250px;">';  
                echo "<h1>Algo de errado aconteceu!</h1>";
                echo '<a href="./fornecedor.php"><button class="btn" id="btnsub">Voltar</button></a><br>';
                //echo $conexao->error . '<br>' . $sql;
                echo "</div>";
            
            }
        }
    }
    $conexao->close();
    ?>
</body>

</html>