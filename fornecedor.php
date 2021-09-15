<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './links.php'?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <title>OutletNet (Fornecedor)</title>
</head>

<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php' ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="incluir_fornecedores.php" method="POST">
                    
                    <div align="center">
                        <fieldset align="center">
                            <h2>Cadastro de Fornecedores <i class="fa fa-truck"></i></h2>
                            <h5>Observação: Todos os campos com (*) são obrigatórios!</h5>
                        </fieldset>
                    </div>
                        <div align="center">    
                            <fieldset id="fs1">
                                <legend align="center"><strong>Dados do Fornecedor</strong></legend>
                                <fieldset class="fsborder">
                                    <legend align="center">Identificação</legend>
                                    <table align="center">
                                        <tr>
                                            <td>CNPJ*</td>
                                            <td>
                                                <input name="cnpj" type="text" class="form-control" data-mask="00.000.000/0000-00" placeholder="Ex.: 00.000.000/0000-00" required>
                                            </td>
                                            <tr>
                                                <td>Razão*</td>
                                                <td>
                                                    <input name="razao" type="text" class="form-control" name="razaofornecedor" size="20" maxlength="50" id="">
                                                    <button id="btnconsultarcnpj" class="btn btn-primary">Consultar</button>
                                                </td>
                                            </tr>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset class="fsborder">
                                    <legend align="center">Contato</legend>
                                    <table align="center">
                                        <tr>
                                            <td>Telefone 1*</td>
                                            <td><input type="text" class="form-control" placeholder="Ex. (00) 0000-0000" data-mask="(00) 0000-0000" name="telefone1fornecedor" size=15 maxlength="15" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Telefone 2</td>
                                            <td><input type="text" class="form-control" placeholder="Ex. (00) 0000-0000" data-mask="(00) 0000-0000" name="telefone2fornecedor" size=15 maxlength="15" id=""></td>
                                        </tr>
                                        <tr>
                                            <td>Celular*</td>
                                            <td><input type="text" class="form-control" placeholder="Ex. (00)0 0000-0000" data-mask="(00)0 0000-0000" name="celularfornecedor" size=15 maxlength="15" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Whatsapp</td>
                                            <td><input type="text" class="form-control" placeholder="Ex. (00)0 0000-0000" data-mask="(00)0 0000-0000" name="whatsappfornecedor" size=15 maxlength="15" id=""></td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset class="fsborder">
                                    <legend align="center">Informações Adicionais</legend>
                                    <table align="center">
                                        <tr>
                                            <td>E-mail*</td>
                                            <td><input class="form-control" placeholder="Ex. example@domain.com" type="email" name="emailfornecedor" size="30" maxlength="50" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Data de Cadastro*</td>
                                            <td><input class="form-control" style="text-align: center;" type="date" name="datacadastrofornecedor" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Data da Última Compra</td>
                                            <td><input class="form-control" style="text-align: center;" type="date" name="dataultcompfornecedor" id=""></td>
                                        </tr>
                                        <tr>
                                            <td>Saldo de Compras* R$</td>
                                            <td><input class="form-control" style="text-align: right;" type="text" name="saldocompradofornecedor" min="0" max="10000000" maxlength="12" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><input type="radio" name="statusfornecedor" value="Ativo" id="">Ativo</td>
                                            <tr>
                                                <td></td>
                                                <td><input type="radio" name="statusfornecedor" value="Inativo" id="">Inativo</td>
                                            </tr>
                                        </tr>
                                        <tr>
                                            <td>Observação</td>
                                            <td><textarea rows="5" cols="30" maxlength="500" name="observacaofornecedor" id=""></textarea></td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset class="fsborder">
                                    <legend align="center">Dados Bancários</legend>
                                    <table align="center">
                                        <tr>
                                            <td>Banco*</td>
                                            <td><input type="text" name="bancofornecedor" id="" size="3" maxlength="3" style="text-align: right;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Agência*</td>
                                            <td><input type="text" name="agenciafornecedor" size="5" maxlength="5" id="" style="text-align: right;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Conta*</td>
                                            <td><input type="text" name="contafornecedor" id="" size="10" maxlength="10" style="text-align: right;" required></td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset align="center">
                                    <input id="btnsub" class="btn btn-primary" type="submit" value="Gravar">
                                    <button class="btn" id="btncancel">Cancelar</button>
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