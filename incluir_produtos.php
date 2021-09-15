<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './links.php'?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <title>OutletNet (Incluir Produto)</title>
</head>

<body>
<?php
        include_once "./conexao.php";
        $codigo_de_barras = $_POST['codigobarras'];
        $descricao = $_POST['descricaoprod'];
        $unidade = $_POST['unidadeproduto'];
        $peso = $_POST['pesoproduto'];
        $custo = $_POST['custoproduto'];
        $venda = $_POST['vendaproduto'];
        $ultima_venda = $_POST['ultimacompraproduto'];
        $fornecedor = $_POST['fornecedorproduto'];
        $qtde = $_POST['quantidadeproduto'];
        $minimo = $_POST['minimoproduto'];
        $img = $_POST['imgproduto'];

        $sql = "INSERT INTO produtos(codigodebarras, descricao, unidade, peso, custo, venda, ultimavenda, fornecedor, 
        quantidade, minimo, imagem) VALUES ('$codigo_de_barras','$descricao','$unidade','$peso','$custo','$venda','$ultima_venda',
        '$fornecedor','$qtde','$minimo','$img')";
            if (mysqli_query($conexao, $sql)) {
                echo '<div style="padding-top: 20%;" align="center"><h2 class="bg-success w-25 text-light">Produto cadastrado com sucesso!.</h2></div>';
                echo '<br><br><div align="center" class="container"><div class="row"><div class="col"><a href="./clientes.php"><button class="btn btn-primary">Voltar</button></a></div></div></div>';
            }
            else{
                /*echo '<div style="padding-top: 20%;" align="center"><h2 class="bg-danger w-25 text-light">Produto Não cadastrado!.</h2></div>';
                echo '<br><br><div align="center" class="container"><div class="row"><div class="col"><a href="./clientes.php"><button class="btn btn-primary">Voltar</button></a></div></div></div>';
                */echo '<div style="margin-top: 300px;" align="center"><h2 class="text-danger">Ops!, Aconteceu algo de errado.</h2> <br>' . '<br>Erro: ' . $conexao->error . '<br>Query: ' . $sql . '</div>';
                echo '<br><br><div align="center" class="container"><div class="row"><div class="col"><a href="./clientes.php"><button class="btn btn-primary">Voltar</button></a></div></div></div>';
                
            } 
        $conexao->close();
    ?>
</body>

</html>