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
        $codigo = $_POST['codigo'];
        $descricao = $_POST['descricaoprod'];
        $unidade = $_POST['unidadeproduto'];
        $peso = $_POST['pesoproduto'];
        $custo = $_POST['custoproduto'];
        $venda = $_POST['vendaproduto'];
        $ultima_venda = $_POST['ultimacompraproduto'];
        $fornecedor = $_POST['fornecedorproduto'];
        $qtde = $_POST['quantidadeproduto'];
        $minimo = $_POST['minimoproduto'];
        $imagem = $_FILES['arquivo']['name'];
        $diretorio = "img/";
        $_UP['pasta'] = $diretorio;

        // testa se existe o cpf escolhido
        $sql = "SELECT * FROM produtos WHERE codigodebarras = '$codigo'";
        //echo $sql;
        if ($resultado = mysqli_query($conexao,$sql)) {

            if ($campo = mysqli_fetch_array($resultado)) {
                // se achou achou, é para atualizar
                // update
                $sql = "UPDATE produtos SET codigodebarras   = '$codigo', descricao = '$descricao', unidade = '$unidade', peso = '$peso', custo = '$custo', venda = '$venda',
                ultimavenda = '$ultima_venda', fornecedor = '$fornecedor', quantidade = '$qtde', minimo = '$minimo', imagem = '$imagem' 
                WHERE codigodebarras = '$codigo'";
                //echo $sql;
                if (mysqli_query($conexao,$sql)) {
                    move_uploaded_file($_FILES['arquivo']['tmp_name'] ,$_UP['pasta'].$imagem);

                    echo '<div align="center" style="margin-top:250px;">';
                    echo "<h1>Produto atualizado com sucesso!</h1><br>";
                    echo '<a href="./produtos.php"><button class="btn" id="btnsub">Voltar p/ Produtos</button></a>';
                    echo '<a style="margin-left: 8px;" href="./relatorios.php"><button class="btn" id="btncancel">Voltar p/ Relatórios</button></a>';
                    echo "</div>";
                }
                else
                {
                    echo '<div align="center" style="margin-top:250px;">';  
                    echo "<h1>Algo de errado aconteceu!</h1>";
                    echo '<a href="./produtos.php"><button class="btn" id="btnsub">Voltar</button></a><br>';
                    //echo $conexao->error . '<br>' . $sql;
                    echo "</div>";
                }
            }
            else
            {
                // se não achou, é para incluir
                // insert 
                $sql = "INSERT INTO produtos
                (codigodebarras, descricao, unidade, peso, custo, venda, ultimavenda, fornecedor, quantidade, minimo, imagem) 
                VALUES 
                ('$codigo', '$descricao', '$unidade', '$peso', '$custo', '$venda', '$ultima_venda', '$fornecedor', '$qtde', '$minimo', '$imagem')";
                //echo $sql;
                if (mysqli_query($conexao,$sql)) {
                    move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$imagem);
                    echo '<div align="center" style="margin-top:250px;">';  
                    echo "<h1>Produto cadastrado com sucesso!</h1>";
                    echo '<a href="./produtos.php"><button class="btn" id="btnsub">Voltar p/ Produtos</button></a>';
                    echo '<a style="margin-left: 8px;" href="./relatorios.php"><button class="btn" id="btncancel">Voltar p/ Relatórios</button></a>';
                    echo "</div>";
                }
                else
                {
                    echo '<div align="center" style="margin-top:250px;">';  
                    echo "<h1>Algo de errado aconteceu!</h1>";
                    echo '<a href="./produtos.php"><button class="btn" id="btnsub">Voltar</button></a><br>';
                    //echo $conexao->error . '<br>' . $sql;
                    echo "</div>";
                
                }
            }
        } 
        $conexao->close();
    ?>
</body>

</html>