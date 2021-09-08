<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/2.0.6/stylesheets/locastyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/fornecedor.css">
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <title>OutletNet (Fornecedor)</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0C1446;">
            <div class="container-fluid">
                <img width="40px" src="./images/logo.png" alt="Imagem não encontrada...">
                <a class="navbar-brand disabled" href="#">OutletNet</a>
                <button class="navbar-toggler pages" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" id="nav1">
                            <a class="nav-link text-white" href="./index.php">Principal</a>
                        </li>
                        <li class="nav-item" id="nav2">
                            <a class="nav-link disabled text-white" aria-current="page" href="#">Fornecedor</a>
                        </li>
                        <li class="nav-item" id="nav3">
                            <a class="nav-link text-light" href="./produtos.php">Produtos</a>
                        </li>
                        <li class="nav-item" id="nav4">
                            <a class="nav-link text-light" href="./clientes.php">Clientes</a>
                        </li>
                        <li class="nav-item dropdown" id="nav5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Movimento
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Entrada de Produtos</a></li>
                              <li><a class="dropdown-item" href="#">Saída de Produtos</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Baixa de Produtos</a></li>
                              <li><a class="dropdown-item" href="#">Devolução de Produtos</a></li>
                            </ul>
                          </li>
                        <li class="nav-item" id="nav6">
                            <a class="nav-link disabled" aria-disabled="true" href="#">Relatórios</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Google" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div align="center">
        <fieldset align="center">
            <h2>Cadastro de Fornecedores <i class="fa fa-truck"></i></h2>
            <h5>Observação: Todos os campos com (*) são obrigatórios!</h5>
        </fieldset>
    </div>
    <form role="form">
        <div align="center">    
            <fieldset id="fs1">
                <legend align="center"><strong>Dados do Fornecedor</strong></legend>
                <fieldset class="fsborder">
                    <legend align="center">Identificação</legend>
                    <table align="center">
                        <tr>
                            <td>CNPJ*</td>
                            <td>
                                <input type="text" class="form-control" data-mask="00.000.000/0000-00" placeholder="Ex.: 00.000.000/0000-00">
                            </td>
                            <tr>
                                <td>Razão*</td>
                                <td>
                                    <input type="text" class="form-control" name="razaofornecedor" size="20" maxlength="50" id="">
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
                            <td><input type="radio" name="statusfornecedor" id="">Ativo</td>
                            <tr>
                                <td></td>
                                <td><input type="radio" name="statusfornecedor" id="">Inativo</td>
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
    <footer style="text-align: center; height:70px; background-color: #0C1446; padding: 5px;" class="w-100">
        <p class="text-light"><i class="fa fa-map"></i> Setor Comercial Sul Quadra 2 Bloco C Edifício São Paulo, sala 208, Brasília - DF, 70297-400 
        <br><i class="fa fa-globe"></i> 6427+Q5 Brasilia, Federal District <br><i class="fa fa-phone"></i> +556132264518</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
    <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>

</html>