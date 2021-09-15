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
        $data_cadastro = $_POST['datacadastrofornecedor'];
        $data_ult_compra = $_POST['dataultcompfornecedor'];
        $saldo_compra = $_POST['saldocompradofornecedor'];
        $status = $_POST['statusfornecedor'];
        $obs = $_POST['observacaofornecedor'];
        $banco = $_POST['bancofornecedor'];
        $ag = $_POST['agenciafornecedor'];
        $conta = $_POST['contafornecedor'];

        $sql = "INSERT INTO fornecedores(cnpj, razao, telefone1, telefone2, celular, whatsapp, email, datacompra, 
        datavenda, saldocompras, observacao, status, banco, agencia, conta) VALUES ('$cnpj','$razao','$telefone1','$telefone2','$celular','$wpp','$email_fornecedor',
        '$data_cadastro','$data_ult_compra','$saldo_compra','$status','$obs',
        '$banco','$ag', '$conta')";
            if (mysqli_query($conexao, $sql)) {
                echo '<div style="padding-top: 20%;" align="center"><h2 class="bg-success w-25 text-light">Fornecedor cadastrado com sucesso!.</h2></div>';
                echo '<br><br><div align="center" class="container"><div class="row"><div class="col"><a href="./clientes.php"><button class="btn btn-primary">Voltar</button></a></div></div></div>';
            }
            else{
                /*echo '<div style="padding-top: 20%;" align="center"><h2 class="bg-danger w-25 text-light">Fornecedor Não cadastrado!.</h2></div>';
                echo '<br><br><div align="center" class="container"><div class="row"><div class="col"><a href="./clientes.php"><button class="btn btn-primary">Voltar</button></a></div></div></div>';
                */echo '<div style="margin-top: 300px;" align="center"><h2 class="text-danger">Ops!, Aconteceu algo de errado.</h2> <br>' . '<br>Erro: ' . $conexao->error . '<br>Query: ' . $sql . '</div>';
                echo '<br><br><div align="center" class="container"><div class="row"><div class="col"><a href="./clientes.php"><button class="btn btn-primary">Voltar</button></a></div></div></div>';
                
            } 
        $conexao->close();
    ?>
</body>

</html>