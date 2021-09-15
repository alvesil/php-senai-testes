<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php' ?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <title>OutletNet (Clientes)</title>
</head>

<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php' ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="incluir_clientes.php" method="POST">
                
                <div align="center">
                    <fieldset id="fscadastrocliente" align="center">
                        <h2>Cadastro de Clientes <i class="fa fa-user"></i></h2>
                        <h5>Observação: Todos os campos com (*) são obrigatórios!</h5>
                    </fieldset>
                </div>
                    <div align="center">
                        <fieldset id="fs1">
                            <legend align="center"><strong>Dados do Cliente</strong></legend>
                            <fieldset class="fsborder">
                                <legend align="center">Identificação</legend>
                                <table align="center">
                                    <tr>
                                        <td>Nome completo</td>
                                        <td><input type="text" name="nomecliente" size="30" maxlength="50" id=""></td>
                                    </tr>
                                    <tr>
                                        <td>CPF*</td>
                                        <td><input data-mask="000.000.000-00" placeholder="Ex. 000.000.000-00" style="text-align: right;" type="text" name="cpfcliente" min="0" max="99999999999" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Data de Nascimento*</td>
                                        <td><input style="text-align: right;" type="date" name="datanascimentocliente" size="10" maxlength="10" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>Endereço</td>
                                        <td><input type="text" name="enderecocliente" size="30" maxlength="50" id=""></td>
                                    </tr>
                                    <tr>
                                        <td>Nº do Endereço</td>
                                        <td><input type="text" name="numeroenderecocliente" size="3" maxlength="5" id=""></td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <fieldset class="fsborder">
                                <legend align="center">Endereço</legend>
                                <table align="center">
                                    <tr>
                                        <td>Bairro*</td>
                                        <td><input type="text" name="bairrocliente" size="30" maxlength="30" id="" required></td>

                                    </tr>
                                    <tr>
                                        <td style="text-align: right;">Cidade*</td>
                                        <td><input type="text" name="cidadecliente" size="30" maxlength="30" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>CEP*</td>
                                        <td><input data-mask="00.000-000" placeholder="Ex. 00.000-000" class="input-form" style="text-align: right;" type="text" name="cepcliente" size="30" maxlength="30" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>UF*</td>
                                        <td>
                                            <input name="ufcliente" size="2" list="ufs" />
                                            <datalist id="ufs">
                                                <option value="AC">
                                                <option value="AL">
                                                <option value="AM">
                                                <option value="AP">
                                                <option value="BA">
                                                <option value="CE">
                                                <option value="DF">
                                                <option value="ES">
                                                <option value="GO">
                                                <option value="MA">
                                                <option value="PA">
                                                <option value="PB">
                                                <option value="PE">
                                                <option value="PR">
                                                <option value="RJ">
                                                <option value="RN">
                                                <option value="RS">
                                                <option value="RR">
                                                <option value="RO">
                                                <option value="SC">
                                                <option value="SP">
                                            </datalist>
                                        </td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <fieldset class="fsborder">
                                <legend align="center">Informações Adicionais</legend>
                                <table align="center">
                                    <tr>
                                        <td>Sexo*</td>
                                        <td><input type="radio" name="sexocliente" id="" value="M" required>Masculino
                                            <input type="radio" name="sexocliente" id="" value="F"required>Feminino
                                            <input type="radio" name="sexocliente" id="" value="ND" required>Não declarado</td>
                                    </tr>
                                    <tr>
                                        <td>Telefone Celular*</td>
                                        <td><input type="number" name="celcliente" min="0" max="99999999999999" maxlength="14" id="" required></td>
                                    </tr>
                                    <tr>
                                        <td>E-mail</td>
                                        <td><input type="email" size="30" maxlength="30" name="emailcliente" id=""></td>
                                    </tr>
                                    <tr>

                                        <td>Salário Pretendido</td>
                                        <td><input style="text-align: right;" type="number" name="salariocliente" min="0" max="99999" maxlength="5" id="">R$</td>
                                    </tr>
                                    <tr>
                                        <td>Cor</td>
                                        <td><input id="clrbrdr" type="color" name="corcliente" id=""></td>
                                    </tr>
                                    <tr>
                                        <td>Cursos que fez</td>
                                        <td><textarea name="cursoscliente" rows="5" cols="30" maxlength="500" id=""></textarea></td>
                                    </tr>
                                </table>
                            </fieldset>
                            <br>
                            <fieldset id="btngrvecancl" align="center">
                                <input id="btnsub" class="btn" type="submit" value="Gravar">
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