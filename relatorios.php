<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './links.php'?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <style>
        table, th, tr, td{
            border: 1px solid; 
            border-collapse:collapse;
            padding-left: 8px;
            padding-right: 8px;
            text-align: center;
            background-color: #dddddd;
        }
    </style>
    <title>Relatórios</title>
</head>
<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php' ?>
    </div>
    <div align="center">
            <div style="padding-bottom:6%; padding-left:2%; padding-right:2%; padding-top:2%;">
                <p>
                    <button id="btnsub" class="btn btn-lg w-100 disabled" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Clientes
                    </button>
                </p>
                <div class="collapse show w-100" id="collapseExample">
                    <div class="card card-body w-100">
                        <?php 
                            require_once 'conexao.php';
                            $sql = "SELECT * FROM clientes WHERE 1";
                            $resultado = mysqli_query($conexao, $sql);
                            if (mysqli_num_rows($resultado) > 0) {
                                # code...
                                echo '<table>';
                                    echo '<th>CPF</th>';
                                    echo '<th>CEP</th>';
                                    echo '<th>Data Nasc.</th>';
                                    echo '<th>Endereço</th>';
                                    echo '<th>Nº</th>';
                                    echo '<th>Bairro</th>';
                                    echo '<th>Cidade</th>';
                                    echo '<th>UF</th>';
                                    echo '<th>Sexo</th>';
                                    echo '<th>Celular</th>';
                                    echo '<th>e-mail</th>';
                                    echo '<th>Salário</th>';
                                    echo '<th>Cor</th>';
                                    echo '<th>Cursos</th>';
                                while ($tabela = mysqli_fetch_array($resultado)) {
                                    
                                    $cpf = $tabela['cpf'];
                                    $cep = $tabela['cep'];
                                    $data_nascimento = $tabela['datanascimento'];
                                    $endereco = $tabela['endereco'];
                                    $numero_endereco = $tabela['numeroendereco'];
                                    $bairro = $tabela['bairro'];
                                    $cidade = $tabela['cidade'];
                                    $uf = $tabela['uf'];
                                    $sexo = $tabela['sexo'];
                                    $celular = $tabela['celular'];
                                    $email = $tabela['email'];
                                    $salario = $tabela['salario'];
                                    $cor = $tabela['cor'];
                                    $cursos_feitos = $tabela['cursosfeitos'];
                                    echo '<tr>';
                                    echo '<td>' . $cpf . '</td>';
                                    echo '<td>' . $cep . '</td>';
                                    echo '<td>' . $data_nascimento . '</td>';
                                    echo '<td>' . $endereco . '</td>';
                                    echo '<td>' . $numero_endereco . '</td>';
                                    echo '<td>' . $bairro . '</td>';
                                    echo '<td>' . $cidade . '</td>';
                                    echo '<td>' . $uf . '</td>';
                                    echo '<td>' . $sexo . '</td>';
                                    echo '<td>' . $celular . '</td>';
                                    echo '<td>' . $email . '</td>';
                                    echo '<td>' . $salario . '</td>';
                                    echo '<td style="text-transform:uppercase; font-style:bold; color:#888888; background-color:'.$cor.';">' . $cor . '</td>';
                                    echo '<td>' . $cursos_feitos . '</td>';
                                    echo '</tr>';
                                    
                                }
                                echo '</table>';
                            } else {
                                # code...
                                echo '<div align="center"><p>Nenhum registro encontrado.</p></div>';
                            }  
                        ?>
                    </div>
                </div>
                <p>
                    <button id="btnsub" class="btn btn-lg w-100 disabled" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        Fornecedores
                    </button>
                </p>
                <div class="collapse show" id="collapseExample2">
                    <div class="card card-body">
                        <?php 
                            require_once 'conexao.php';
                            $sql = "SELECT * FROM fornecedores WHERE 1";
                            $resultado = mysqli_query($conexao, $sql);
                            if (mysqli_num_rows($resultado) > 0) {
                                # code...
                                echo '<table>';
                                echo '<th>CNPJ</th>';
                                echo '<th>Razão Social</th>';
                                echo '<th>Telefone(1)</th>';
                                echo '<th>Telefone(2)</th>';
                                echo '<th>Celular</th>';
                                echo '<th>Whatsapp</th>';
                                echo '<th>e-mail</th>';
                                echo '<th>Data de Compra</th>';
                                echo '<th>Data de Venda</th>';
                                echo '<th>Saldo de Compras</th>';
                                echo '<th>Status</th>';
                                echo '<th>Observação</th>';
                                echo '<th>Banco</th>';
                                echo '<th>Agência</th>';
                                echo '<th>Conta</th>';
                                while ($tabela = mysqli_fetch_array($resultado)) {
                                    $cnpj = $tabela['cnpj'];
                                    $razao = $tabela['razao'];
                                    $telefone_1 = $tabela['telefone1'];
                                    $telefone_2 = $tabela['telefone2'];
                                    $celular = $tabela['celular'];
                                    $wpp = $tabela['whatsapp'];
                                    $email = $tabela['email'];
                                    $data_compra = $tabela['datacompra'];
                                    $data_venda = $tabela['datavenda'];
                                    $saldo_compras = $tabela['saldocompras'];
                                    $status = $tabela['status'];
                                    $obs = $tabela['observacao'];
                                    $banco = $tabela['banco'];
                                    $agencia = $tabela['agencia'];
                                    $conta = $tabela['conta'];
                                    echo '<tr>';
                                    echo '<td>' . $cnpj . '</td>';
                                    echo '<td>' . $razao . '</td>';
                                    echo '<td style="font-size:8pt;">' . $telefone_1 . '</td>';
                                    echo '<td style="font-size:8pt;">' . $telefone_2 . '</td>';
                                    echo '<td style="font-size:8pt;">' . $celular . '</td>';
                                    echo '<td style="font-size:8pt;">' . $wpp . '</td>';
                                    echo '<td>' . $email . '</td>';
                                    echo '<td>' . $data_compra . '</td>';
                                    echo '<td>' . $data_venda . '</td>';
                                    echo '<td>' . $saldo_compras . '</td>';
                                    echo '<td>' . $status . '</td>';
                                    echo '<td>' . $obs . '</td>';
                                    echo '<td>' . $banco . '</td>';
                                    echo '<td>' . $agencia . '</td>';
                                    echo '<td>' . $conta . '</td>';
                                    echo '</tr>';
                                } 
                            echo '</table>';
                            } else {
                                # code...
                                echo '<div align="center"><p>Nenhum registro encontrado.</p></div>';
                            }  
                        ?>
                    </div>
                </div>
                <p>
                    <button id="btnsub" class="btn btn-lg w-100 disabled" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                        Produtos
                    </button>
                </p>
                <div class="collapse show" id="collapseExample3">
                    <div class="card card-body">
                    <?php 
                            require_once 'conexao.php';
                            $sql = "SELECT * FROM produtos WHERE 1";
                            $resultado = mysqli_query($conexao, $sql);
                            if (mysqli_num_rows($resultado) > 0) {
                                # code...
                                echo '<table>';
                                echo '<th>Código de Barras</th>';
                                echo '<th>Descrição</th>';
                                echo '<th>Unidade</th>';
                                echo '<th>Peso</th>';
                                echo '<th>Custo</th>';
                                echo '<th>Venda</th>';
                                echo '<th>Última Venda</th>';
                                echo '<th>Fornecedor</th>';
                                echo '<th>Quantidade</th>';
                                echo '<th>Mínimo</th>';
                                echo '<th>Imagem</th>';
                                while ($tabela = mysqli_fetch_array($resultado)) {
                                    $codigo_de_barras = $tabela['codigodebarras'];
                                    $descricao = $tabela['descricao'];
                                    $unidade = $tabela['unidade'];
                                    $peso = $tabela['peso'];
                                    $custo = $tabela['custo'];
                                    $venda = $tabela['venda'];
                                    $ultima_venda = $tabela['ultimavenda'];
                                    $fornecedor = $tabela['fornecedor'];
                                    $qtde = $tabela['quantidade'];
                                    $minimo = $tabela['minimo'];
                                    $img = $tabela['imagem'];
                                    echo '<tr>';
                                    echo '<td>' . $codigo_de_barras . '</td>';
                                    echo '<td>' . $descricao . '</td>';
                                    echo '<td>' . $unidade . '</td>';
                                    echo '<td>' . $peso . '</td>';
                                    echo '<td>' . $custo . '</td>';
                                    echo '<td>' . $venda . '</td>';
                                    echo '<td>' . $ultima_venda . '</td>';
                                    echo '<td>' . $fornecedor . '</td>';
                                    echo '<td>' . $qtde . '</td>';
                                    echo '<td>' . $minimo . '</td>';
                                    echo '<td><img src="' . $img . '"></td>';
                                    echo '</tr>';
                                } 
                            echo '</table>';
                            } else {
                                # code...
                                echo '<div align="center"><p>Nenhum registro encontrado.</p></div>';
                            }  
                        ?>
                    </div>
                </div>
                <!--<a href="index.php">
                <button id="btncancel" class="btn btn-lg">Voltar</button>
                </a>-->
            </div>
    </div>
    <?php include_once './rodape.php' ?>
    <?php include_once './scripts.php' ?>   
</body>
</html>