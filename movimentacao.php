<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php' ?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <style>
        input{
            background-color: #cccccc;
        }
        .notgrey{
            background-color: #ffffff;
        }
    </style>
    <title>OutletNet (Movimentação)</title>
</head>

<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php' ?>
        <?php include './funcoes.php' ?>
    </div>
    <div align="center">
        <fieldset id="fscadastro" align="center">
            <h2>Movimentação <i class="fa fa-barcode"></i></h2>
            <h5>Observação: Todos os campos com (*) são obrigatórios!</h5>
        </fieldset>
    </div>
    <form action="mostrar_movimentacao.php" method="POST">
        <div align="center">
            <fieldset id="cabecalho1">
                <fieldset>
                    <table>
                    <tr>
                    <td>Código de Barras</td>
                    <td><input class="notgrey" type="text" name="mov_barras" size="13" maxlength="13"> 


                    <button class="btn" id="btnsub">Buscar</button>
                    </td>


                    <td>Descrição</td>
                    <td><input type="text" name="descricaoproduto" size="50" maxlength="50" disabled>
                    </td>
                    </tr>


                    <tr>
                    <td>Unidade</td>
                    <td>

                    <input type="text" size="15" maxlength="15"   name="unidadeproduto" disabled >
                    </select>
                    </td>


                    <td>Peso</td>
                    <td><input type="number" name="pesoproduto" size="5" maxlength="5" disabled ></td>
                    </tr>


                    <tr>
                    <td>Custo</td>
                    <td><input type="number" name="custoproduto" size="10" maxlength="10" disabled></td>
                    <td>Venda</td>
                    <td><input type="number" name="vendaproduto" size="10" maxlength="10" disabled></td>
                    </tr>


                    <tr>
                    <td>Em Estoque</td>
                    <td><input type="number" name="quantidadeproduto" size="5" maxlength="5" disabled=""></td>
                    <td>Estoque Mínimo</td>
                    <td><input type="number" name="minimoproduto" size="5" maxlength="5" disabled ></td>
                    </tr>


                    <tr>
                    <td>Imagem</td>
                    <td><input type="file" name="imagemproduto" disabled></td>
                    </tr>


                    <tr>
                    <td>Fornecedor</td>
                    <td><input type="number" name="mov_cnpj" size="5" maxlength="5" disabled>


                    </td>
                    <td>Razão Social</td>
                    <td><input type="text" name="razaofornecedores" size="50" maxlength="50" disabled></td>
                    </tr>


                    <tr>
                    <td>Custo do Produto</td>
                    <td><input type="number" name="mov_custo" size="10" maxlength="10" disabled></td>
                    <td>Valor de Venda</td>
                    <td><input type="number" name="mov_venda" size="10" maxlength="10" disabled></td>
                    </tr>


                    <tr>
                    <td>quantidade</td>
                    <td><input type="number" name="mov_quantidade" size="5" maxlength="5" disabled></td>
                    </tr>


                    <tr>
                    <td>Data e Hora</td>
                    <td><input type="text" name="mov_datahora" value = "<?php echo datasistematela(); ?>" disabled ></td>
                    </tr>
                    </table>    
                <br>
                <input class="btn" id="btnsub" type="submit" name="botaoenviar" value="Gravar" disabled> 
                <br>
            </fieldset>
        </div>
    </form>
    
    <?php include_once './rodape.php' ?>
    <?php include_once './scripts.php' ?>
</html>