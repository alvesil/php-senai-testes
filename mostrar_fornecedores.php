<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './links.php'?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <style>
        #cnpj1{
            background-color: #cccccc;
        }
    </style>
    <title>OutletNet (Fornecedor)</title>
</head>

<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php' ?>
        <?php
            $chave = $_POST['cnpjfornecedor'];
            $sql = "SELECT * FROM fornecedores WHERE cnpj = '$chave'";
            $dados = mysqli_query($conexao, $sql);
            $linha = mysqli_fetch_assoc($dados);
            $razao = $linha['razao'];
            $telefone1 = $linha['telefone1'];
            $telefone2 = $linha['telefone2'];
            $celular = $linha['celular'];
            $whatsapp = $linha['whatsapp'];
            $email = $linha['email'];
            $datacompra = $linha['datacompra'];
            $datavenda = $linha['datavenda'];
            $saldocompras = $linha['saldocompras'];
            $status = $linha['sts'];
            $observacao = $linha['observacao'];
            $banco = $linha['banco'];
            $agencia = $linha['agencia'];
            $conta = $linha['conta'];
        ?>
    </div>
    <div align="center" class="container">
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
                                                <input disabled value="<?php echo $chave ?>" id="cnpj1" name="cnpjfornecedor" type="text" data-mask="00.000.000/0000-00" placeholder="00.000.000/0000-00" required>
                                                <input hidden value="<?php echo $chave ?>" type="text" name="cnpj" id="">
                                            </td>
                                            <tr>
                                                <td>Razão*</td>
                                                <td>
                                                    <input value="<?php echo $razao ?>" name="razao" type="text" name="razaofornecedor" size="20" maxlength="50" id="">
                                                </td>
                                            </tr>
                                            </form>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset class="fsborder">
                                    <legend align="center">Contato</legend>
                                    <table align="center">
                                        <tr>
                                            <td>Telefone 1*</td>
                                            <td><input value="<?php echo $telefone1 ?>" type="text" placeholder="(00) 0000-0000" data-mask="(00) 0000-0000" name="telefone1fornecedor" size=15 maxlength="15" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Telefone 2</td>
                                            <td><input value="<?php echo $telefone2 ?>" type="text" placeholder="(00) 0000-0000" data-mask="(00) 0000-0000" name="telefone2fornecedor" size=15 maxlength="15" id=""></td>
                                        </tr>
                                        <tr>
                                            <td>Celular*</td>
                                            <td><input value="<?php echo $celular ?>" type="text" placeholder="(00)0 0000-0000" data-mask="(00)0 0000-0000" name="celularfornecedor" size=15 maxlength="15" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Whatsapp</td>
                                            <td><input value="<?php echo $whatsapp ?>" type="text" placeholder="(00)0 0000-0000" data-mask="(00)0 0000-0000" name="whatsappfornecedor" size=15 maxlength="15" id=""></td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset class="fsborder">
                                    <legend align="center">Informações Adicionais</legend>
                                    <table align="center">
                                        <tr>
                                            <td>E-mail*</td>
                                            <td><input value="<?php echo $email ?>" placeholder="example@domain.com" type="email" name="emailfornecedor" size="30" maxlength="50" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Data de Compra*</td>
                                            <td><input value="<?php echo $datacompra ?>" style="text-align: center;" type="date" name="datacadastrofornecedor" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Data da Venda</td>
                                            <td><input value="<?php echo $datavenda ?>" style="text-align: center;" type="date" name="dataultcompfornecedor" id=""></td>
                                        </tr>
                                        <tr>
                                            <td>Saldo de Compras* R$</td>
                                            <td><input value="<?php echo $saldocompras ?>" style="text-align: right;" type="number" step="0.01" name="saldocompradofornecedor" min="0" max="10000000" maxlength="12" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><input required <?php if($status == 'A'){ echo "checked";} ?> type="radio" name="statusfornecedor" value="A" id="">Ativo</td>
                                            <tr>
                                                <td></td>
                                                <td><input required <?php if($status == 'I'){ echo "checked";} ?> type="radio" name="statusfornecedor" value="I" id="">Inativo</td>
                                            </tr>
                                        </tr>
                                        <tr>
                                            <td>Observação</td>
                                            <td><textarea rows="5" cols="30" maxlength="500" name="observacaofornecedor" id=""><?php echo $observacao ?></textarea></td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset class="fsborder">
                                    <legend align="center">Dados Bancários</legend>
                                    <table align="center">
                                        <tr>
                                            <td>Banco*</td>
                                            <td><input value="<?php echo $banco ?>" type="text" name="bancofornecedor" id="" size="3" maxlength="3" style="text-align: right;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Agência*</td>
                                            <td><input value="<?php echo $agencia ?>" type="text" name="agenciafornecedor" size="5" maxlength="5" id="" style="text-align: right;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Conta*</td>
                                            <td><input value="<?php echo $conta ?>" type="text" name="contafornecedor" id="" size="10" maxlength="10" style="text-align: right;" required></td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset align="center">
                                    <input id="btnsub" class="btn" type="submit" value="Gravar">
                                    <a href="./fornecedor.php" class="btn" id="btncancel">Voltar</a>
                                    <!--<input type="reset" class="btn" id="btncancel">-->
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