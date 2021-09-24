<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php' ?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <style>
        .grey{
            background-color: #cccccc;
        }
    </style>
    <title>OutletNet (Produtos)</title>
</head>

<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php' ?>
    </div>
    <div>
        <div>
            <div>
                <form action="mostrar_produtos.php" method="POST">
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
                                        <td><input class="input-form" type="text" name="codigobarras" size="30" maxlength="13" id="" required></td>
                                        <td><button style="margin-left:8px;" id="btnsub" class="btn">Consultar</button></td>
                                    </tr>
                                    <tr>
                                        <td>Descrição*</td>
                                        <td><input class="grey" disabled type="text" name="descricaoprod" size="20" maxlength="50" id="" required></td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <fieldset class="fsborder">
                                <legend align="center">Dimensões e Pesagem</legend>
                                <table align="center">
                                    <tr>
                                        <td>Unidade*</td>
                                        <td><select class="grey" disabled name="unidadeproduto" id="" required>                                 
                                            <option value="l">Lata</option>
                                            <option value="k">Quilo</option>
                                            <option value="p">Peça</option>
                                            <option value="m">Metro</option>
                                            <option value="u">Unidade</option>
                                        </select></td>
                                    </tr>
                                    <tr>
                                        <td>Peso*</td>
                                        <td><input class="grey" disabled type="number" name="pesoproduto" size=5 maxlength="5" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Custo*</td>
                                        <td><input class="grey" disabled class="input-form" style="text-align: right;" type="text" name="custoproduto" size="10" maxlength="10" id="" required></td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <fieldset class="fsborder">
                                <legend align="center">Informações de Fornecedor/Vendas</legend>
                                <table align="center">
                                    <tr>
                                        <td>Venda*</td>
                                        <td><input class="grey" disabled type="number" name="vendaproduto" step="0.00" size="10" maxlength="10" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Ultima Compra*</td>
                                        <td><input class="grey" disabled style="text-align: right;" type="date" name="ultimacompraproduto" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Fornecedor</td>
                                        <td><input class="grey" disabled type="text" size="18" maxlength="18" name="fornecedorproduto" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Quantidade*</td>
                                        <td><input class="grey" disabled type="number" name="quantidadeproduto" min="0" max="10000" maxlength="5" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Mínimo</td>
                                        <td><input class="grey" disabled type="number" name="minimoproduto" size="5" maxlength="5" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Imagem</td>
                                        <td><input class="grey" disabled id="inputimg" type="file" name="imgproduto" id="" ></td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <fieldset id="btnscancel" align="center">
                                <input disabled id="btnsub" class="btn" type="submit" value="Gravar">
                                <input id="btncancel" class="btn" type="reset"></input>
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