<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './links.php'?>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <style>
        table, td, th, tr{
            border: solid 1px;
            border-collapse: collapse;
            background-color: #dedede;
            text-align: center;
            padding-left: 5px;
            padding-right: 5px;
        }
    </style>
    <title>Relatórios</title>
</head>
<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php' ?>
        <?php include './funcoes.php'; ?>
    </div>
    <div align="center">
            <div style="padding-bottom:6%; padding-left:2%; padding-right:2%; padding-top:2%;">
                
                <?php
                    $nrows = mysqli_query($conexao, "SELECT * FROM clientes WHERE 1");
                    $nrows1  = mysqli_query($conexao, "SELECT * FROM produtos WHERE 1");
                    $nrows2 = mysqli_query($conexao, "SELECT * FROM fornecedores WHERE 1");
                    if (mysqli_num_rows($nrows) > 0 || mysqli_num_rows($nrows1) > 0 || mysqli_num_rows($nrows2)) {
                        # code...
                        echo '
                        <div
                            id="myChart" style="width:100%; height:500px;">
                        </div>';
                    }
                ?>
                
                <p>
                    <?php 
                        $sql = "SELECT salario FROM clientes WHERE 1";
                        $res = mysqli_query($conexao, $sql);
                        $final = mysqli_fetch_array($res);
                        $somaSal = 0;
                        
                        for ($i=0; $i < mysqli_num_rows($res); $i++) { 
                            # code...
                            $somaSal += $final['salario'];
                        }
                        //echo formataValor($somaSal);
                    ?>
                </p>
                <p>
                    <button id="btnsub" class="btn btn-lg w-100 disabled" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Clientes
                    </button>
                </p>
                <div align="center">
                    <h4>Clientes cadastrados</h4> 
                    <?php 
                        $sqlcl = "SELECT * FROM clientes WHERE 1";
                        $resultadocl = mysqli_query($conexao, $sqlcl);
                        $testecl = mysqli_num_rows($resultadocl);
                        echo '<h3 style="border: 1px solid black; width: 60px; border-radius: 30px;">'.$testecl.'</h3>';
                    ?>
                </div>
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
                                    echo '<th>Excluir</th>';
                                    echo '<th>Alterar</th>';
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
                                    $cursos_feitos = $tabela['cursosfeitos'];;
                                    echo '<tr>';
                                    echo '<td>' . $cpf . '</td>';
                                    echo '<td>' . $cep . '</td>';
                                    echo '<td>' . formataData($data_nascimento) . '</td>';
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
                                    echo '<td>' . '
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn" id="btncancel" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Excluir Registro!</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            Tem certeza que deseja excluir os dados do CPF:'.$cpf.' ?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <form action="./apagar_clientes.php" method="POST"><input hidden name="cpfclientedel" value="'.$cpf.'"><button class="btn btn-outline" id="btncancel" type="submit">Sim, Excluir!</button></form>
                                                            <button type="button" class="btn" id="btnsub" data-bs-dismiss="modal">Não.</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    
                                                    </td><td>
                                                    <form action="./mostrar_clientes.php" method="POST"><input hidden name="cpfcliente" value="'.$cpf.'">
                                                    <button class="btn" id="btnsub" type="submit"><i class="fa fa-pencil"></i></button></form></td>';
                                    echo '</tr>';
                                    
                                }
                                echo '</table>';
                            } else {
                                # code...
                                echo '<div align="center"><p>Nenhum registro encontrado.</p><a href="./clientes.php" class="btn btn-success"><i class="fa fa-plus-circle"></i> Adicionar Novo Cliente</a></div>';
                            }  
                        ?>
                    </div>
                </div>
                <p>
                    <?php 
                        $sql = "SELECT saldocompras FROM fornecedores WHERE 1";
                        $res = mysqli_query($conexao, $sql);
                        $final = mysqli_fetch_array($res);
                        $somaSaldo = 0;
                        
                        for ($i=0; $i < mysqli_num_rows($res); $i++) { 
                            # code...
                            $somaSaldo += $final['saldocompras'];
                        }
                        //echo formataValor($somaSaldo);
                    ?>
                </p>
                <p>
                    <button id="btnsub" class="btn btn-lg w-100 disabled" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
                        Fornecedores
                    </button>
                </p>
                <div align="center">
                    <h4>Fornecedores cadastrados</h4> 
                    <?php 
                        $sqlfrnc = "SELECT * FROM fornecedores WHERE 1";
                        $resultadofrnc = mysqli_query($conexao, $sqlfrnc);
                        $testefrnc = mysqli_num_rows($resultadofrnc);
                        echo '<h3 style="border: 1px solid black; width: 60px; border-radius: 30px;">'.$testefrnc.'</h3>';
                    ?>
                </div>
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
                                echo '<th>Excluir</th>';
                                echo '<th>Alterar</th>';
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
                                    $status = $tabela['sts'];
                                    $obs = $tabela['observacao'];
                                    $banco = $tabela['banco'];
                                    $agencia = $tabela['agencia'];
                                    $conta = $tabela['conta'];
                                    echo '<tr>';
                                    echo '<td>' . $cnpj . '</td>';
                                    echo '<td>' . $razao . '</td>';
                                    echo '<td style="font-size:8pt;">' . $telefone_1 . '</td>';
                                    echo '<td style="font-size:8pt;">' . $wpp . '</td>';
                                    echo '<td>' . $email . '</td>';
                                    echo '<td>' . formataData($data_compra) . '</td>';
                                    echo '<td>' . formataData($data_venda) . '</td>';
                                    echo '<td>' . $saldo_compras . '</td>';
                                    echo '<td>' . $status . '</td>';
                                    echo '<td>' . $obs . '</td>';
                                    echo '<td>' . $banco . '</td>';
                                    echo '<td>' . $agencia . '</td>';
                                    echo '<td>' . $conta . '</td>';
                                    echo '<td>' . '
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn" id="btncancel" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Excluir Registro!</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                            Tem certeza que deseja excluir os dados do CNPJ:'.$cnpj.' ?
                                                            </div>
                                                            <div class="modal-footer">
                                                            <form action="./apagar_fornecedores.php" method="POST"><input hidden name="cnpjforndel" value="'.$cnpj.'"><button class="btn btn-outline" id="btncancel" type="submit">Sim, Excluir!</button></form>
                                                            <button type="button" class="btn" id="btnsub" data-bs-dismiss="modal">Não.</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                    
                                                    </td><td>
                                                    <form action="./mostrar_fornecedores.php" method="POST"><input hidden name="cnpjfornecedor" value="'.$cnpj.'">
                                                    <button class="btn" id="btnsub" type="submit"><i class="fa fa-pencil"></i></button></form>
                                                    </td>';
                                    echo '</tr>';
                                } 
                            echo '</table>';
                            } else {
                                # code...
                                echo '<div align="center"><p>Nenhum registro encontrado.</p><a href="./fornecedor.php" class="btn btn-success"><i class="fa fa-plus-circle"></i> Adicionar Novo Fornecedor</a></div>';
                            }  
                        ?>
                    </div>
                </div>
                <p>
                    <?php 
                        $sql = "SELECT custo, venda FROM produtos WHERE 1";
                        $res = mysqli_query($conexao, $sql);
                        $final = mysqli_fetch_array($res);
                        $somaCusto = 0;
                        $somaVenda = 0;
                        
                        for ($i=0; $i < mysqli_num_rows($res); $i++) { 
                            # code...
                            $somaCusto += $final['custo'];
                            $somaVenda += $final['venda'];
                        }
                        //echo formataValor($somaCusto). "<br>";
                        //echo formataValor($somaVenda);
                    ?>
                    <button id="btnsub" class="btn btn-lg w-100 disabled" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
                        Produtos
                    </button>
                </p>
                <h4>Produtos cadastrados</h4> 
                <?php 
                        $sqlpdt = "SELECT * FROM produtos WHERE 1";
                        $resultadopdt = mysqli_query($conexao, $sqlpdt);
                        $testepdt = mysqli_num_rows($resultadopdt);
                        echo '<h3 style="border: 1px solid black; width: 60px; border-radius: 30px;">'.$testepdt.'</h3>';
                    ?>
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
                                echo '<th>Excluir</th>';
                                echo '<th>Alterar</th>';
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
                                    echo '<td>' . formataData($ultima_venda) . '</td>';
                                    echo '<td>' . $fornecedor . '</td>';
                                    echo '<td>' . $qtde . '</td>';
                                    echo '<td>' . $minimo . '</td>';
                                    echo '<td><img src="' . $img . '"></td>';
                                    echo '<td>' . '<form action="./apagar_produtos.php" method="POST"><input hidden name="proddel" value="'.$codigo_de_barras.'"><button class="btn btn" id="btncancel" type="submit"><i class="fa fa-trash"></i></button></form>
                                                    </td><td><form action="./mostrar_produtos.php" method="POST"><input hidden name="codigobarras" value="'.$codigo_de_barras.'"><button class="btn btn-primary" type="submit"><i class="fa fa-pencil"></i></button></form></td>';
                                    echo '</tr>';
                                } 
                            echo '</table>';
                            } else {
                                # code...
                                echo '<div align="center"><p>Nenhum registro encontrado.</p><a href="./produtos.php" class="btn btn-success"><i class="fa fa-plus-circle"></i> Adicionar Novo Produto</a></div>';
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
    <script>
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Contry', 'Mhl'],
    ['Salários',<?php echo $somaSal; ?>],
    ['Saldo de Compras',<?php echo $somaSaldo; ?>],
    ['Custo',<?php echo $somaCusto; ?>],
    ['Venda',<?php echo $somaVenda; ?>],
    ]);
    var options = {
    title:'Relações de Valores Teste',
    is3D:true
    };

    var chart = new google.visualization.PieChart(document.getElementById('myChart'));
    chart.draw(data, options);
    }
</script>
</body>
</html>