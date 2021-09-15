<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php' ?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <title>OutletNet (Produtos)</title>
</head>

<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php' ?>
    </div>
    <div align="center">
        <fieldset id="fscadastro" align="center">
            <h2>Cadastro de Produtos <i class="fa fa-barcode"></i></h2>
            <h5>Observação: Todos os campos com (*) são obrigatórios!</h5>
        </fieldset>
    </div>
    <form role="form">
        <div align="center">
            <fieldset id="fsdadosprod">
                <legend align="center"><strong>Dados do Produto</strong></legend>
                <fieldset class="fsborder">
                    <legend align="center">Identificação</legend>
                    <table align="center">
                        <tr>
                            <td>Código de Barras*</td>
                            <td><input class="input-form" type="text" name="codigobarras" size="30" maxlength="30" id="" required></td>
                            <td><button class="btn">Consultar</button></td>
                        </tr>
                        <tr>
                            <td>Descrição*</td>
                            <td><input type="text" name="descricaoprod" size="20" maxlength="50" id="" disabled></td>
                        </tr>
                    </table>
                </fieldset>
                <br>
                <fieldset class="fsborder">
                    <legend align="center">Dimensões e Pesagem</legend>
                    <table align="center">
                        <tr>
                            <td>Unidade*</td>
                            <td><select name="unidadeproduto" id="" disabled>
                                <option value="kg">Quilo</option>
                                <option value="lata">Lata</option>
                                <option value="m">Metro</option>
                            </select></td>
                        </tr>
                        <tr>
                            <td>Peso*</td>
                            <td><input type="number" name="pesoproduto" size=5 maxlength="5" id="" disabled>(kg)</td>
                        </tr>
                        <tr>
                            <td>Custo*</td>
                            <td><input class="input-form" style="text-align: right;" type="text" name="custoproduto" size="10" maxlength="10" id="" required>R$</td>
                        </tr>
                    </table>
                </fieldset>
                <br>
                <fieldset class="fsborder">
                    <legend align="center">Informações de Fornecedor/Vendas</legend>
                    <table align="center">
                        <tr>
                            <td>Venda*</td>
                            <td><input type="number" name="vendaproduto" step="0.00" size="10" maxlength="10" id="" required>R$</td>
                        </tr>
                        <tr>
                            <td>Ultima Compra*</td>
                            <td><input style="text-align: right;" type="date" name="ultimacompraproduto" id="" disabled></td>
                        </tr>
                        <tr>
                            <td>Fornecedor</td>
                            <td><input type="number" size="5" maxlength="5" name="fornecedorproduto" id="" disabled></td>
                        </tr>
                        <tr>
                            <td>Quantidade*</td>
                            <td><input type="number" name="quantidadeproduto" min="0" max="10000" maxlength="5" id="" required></td>
                        </tr>
                        <tr>
                            <td>Mínimo</td>
                            <td><input type="number" name="minimoproduto" size="5" maxlength="5" id="" disabled></td>
                        </tr>
                        <tr>
                            <td>Imagem</td>
                            <td><input id="inputimg" type="file" name="imgproduto" id="" disabled></td>
                        </tr>
                    </table>
                </fieldset>
                <br>
                <fieldset id="btnscancel" align="center">
                    <input class="btn btn-primary" type="submit" value="Gravar">
                    <button id="btncancel" class="btn">Cancelar</button>
                </fieldset>
            </fieldset>
        </div>
    </form>
    
    <?php include_once './rodape.php' ?>
    <?php include_once './scripts.php' ?>
</html>