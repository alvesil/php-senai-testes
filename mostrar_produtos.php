<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php' ?>
    <style>
        #grey{
            background-color: #cccccc;
        }
    </style>
    <title>OutletNet (Produtos)</title>
</head>

<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php' ?>
        <?php
            $chave = $_POST['codigobarras'];
            $sql = "SELECT * FROM produtos WHERE codigodebarras = '$chave'";
            $dados = mysqli_query($conexao, $sql);
            $linha = mysqli_fetch_assoc($dados);
            $descricao = $linha['descricao'];
            $unidade = $linha['unidade'];
            echo $unidade;
            $peso = $linha['peso'];
            $custo = $linha['custo'];
            $venda = $linha['venda'];
            $ultimavenda = $linha['ultimavenda'];
            $fornecedor = $linha['fornecedor'];
            $quantidade = $linha['quantidade'];
            $minimo = $linha['minimo'];
            $imagem = $linha['imagem'] ?? '';
        ?>
    </div>
    <div align="center" class="container">
        <div class="row">
            <div class="col">
                <form action="incluir_produtos.php" enctype="multipart/form-data" method="POST">
                <div align="center">
                    <fieldset id="fscadastro" align="center">
                        <h2>Cadastro de Produtos <i class="fa fa-barcode"></i></h2>
                        <h5>Observação: Todos os campos com (*) são obrigatórios!</h5>
                    </fieldset>
                </div>
                    <div align="center">
                        <fieldset id="fs1">
                            <legend align="center"><strong>Dados do Produto</strong></legend>
                            <fieldset class="fsborder">
                                <legend align="center">Identificação</legend>
                                <table align="center">
                                    <tr>
                                        <td>Código de Barras*</td>
                                        <td><input value="<?php echo $chave;?>" id="grey" disabled class="input-form" type="text" name="codigobarras" size="30" maxlength="13" id="" required></td>
                                        <td><input hidden value="<?php echo $chave;?>" type="text" name="codigo" id=""></td>
                                    </tr>
                                    <tr>
                                        <td>Descrição*</td>
                                        <td><input value="<?php echo $descricao;?>" type="text" name="descricaoprod" size="20" maxlength="50" id="" required></td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <fieldset class="fsborder">
                                <legend align="center">Dimensões e Pesagem</legend>
                                <table align="center">
                                    <tr>
                                        <td>Unidade*</td>
                                        <td>
                                            <select name="unidadeproduto" id="" required>
                                                <option <?php if($unidade == 'l'){ echo "selected";}?> value="l">Lata</option>
                                                <option <?php if($unidade == 'k'){ echo "selected";}?> value="k">Quilo</option>
                                                <option <?php if($unidade == 'p'){ echo "selected";}?> value="p">Peça</option>
                                                <option <?php if($unidade == 'm'){ echo "selected";}?> value="m">Metro</option>
                                                <option <?php if($unidade == 'u'){ echo "selected";}?> value="u">Unidade</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Peso*</td>
                                        <td><input value="<?php echo $peso;?>" type="number" step="0.001" name="pesoproduto" size=5 maxlength="5" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Custo*</td>
                                        <td><input value="<?php echo $custo;?>" class="input-form" style="text-align: right;" type="number" step="0.01" name="custoproduto" size="10" maxlength="10" id="" required></td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <fieldset class="fsborder">
                                <legend align="center">Informações de Fornecedor/Vendas</legend>
                                <table align="center">
                                    <tr>
                                        <td>Venda*</td>
                                        <td><input value="<?php echo $venda;?>" type="number" name="vendaproduto" step="0.01" size="10" maxlength="10" id="" required><td>
                                    </tr>
                                    <tr>
                                        <td>Ultima Compra*</td>
                                        <td><input value="<?php echo $ultimavenda;?>" style="text-align: right;" type="date" name="ultimacompraproduto" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Fornecedor</td>
                                        <td><input value="<?php echo $fornecedor;?>" type="text" size="18" maxlength="18" name="fornecedorproduto" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Quantidade*</td>
                                        <td><input value="<?php echo $quantidade;?>" type="number" step="0.001" name="quantidadeproduto" min="0" max="10000" maxlength="5" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Mínimo</td>
                                        <td><input value="<?php echo $minimo;?>" type="number" step="0.001" name="minimoproduto" size="5" maxlength="5" id="" required></td>
                                    </tr>
                                    <tr>
                                        <?php 
                                        $diretorio = "img/";
                                        $resultado = mysqli_query($conexao,$sql);
                                        $dados = mysqli_fetch_object($resultado);
                                        if ($imagem != null) {
                                            # code...
                                            $foto = $diretorio . $dados->imagem;
                                            echo $foto;
                                        }
                                        ?>
                                        <td>Imagem</td>
                                        <td><input value = "<?php echo $imagem; ?>" type="file" name="arquivo"></td>
                                        <td>
                                        <?php
                                        if ($imagem == null) {
                                            # code...
                                            echo "<img src='' width='50px' height='50px' alt='not found' />";
                                        }else{
                                            echo "<img src='$foto' width='50px' height='50px' alt='' />";
                                            
                                        } 
                                        echo "</td>";
                                        ?>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <fieldset id="btnscancel" align="center">
                                <input id="btnsub" class="btn" type="submit" value="Gravar">
                                <a href="./produtos.php" class="btn" id="btncancel">Voltar</a>
                                <!--<input id="btncancel" class="btn" type="reset"></input>-->
                            </fieldset>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php include_once './rodape.php' ?>
    <?php include_once './scripts.php' ?>
</body>
</html>