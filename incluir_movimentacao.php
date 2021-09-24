<?php 
// cria uma conexao com o banco de dados
include_once 'conexao.php';
include_once 'funcoes.php';
include_once 'links.php';

// pega os valores dos campos do formulário fornecedores e coloca em variaveis
$chave = $_POST['mov_barras'];

// estas variaveis foram mostradas da tabela de produtos
$custoproduto = $_POST['custoproduto'];
$vendaproduto = $_POST['vendaproduto'];
$quantidadeproduto = $_POST['quantidadeproduto'];

// estas variaveis foram digitadas
$mov_custo = $_POST['mov_custo'];
$mov_venda = $_POST['mov_venda'];
$mov_quantidade = $_POST['mov_quantidade'];
$mov_datahora = $_POST['mov_datahora'];
echo $mov_datahora;

// atualizar o custo (se foi alterado), venda (se foi aleterado) e quantidade

// se não alterou o preco de custo, mantem o preco de custo velho
if ( floatval($mov_custo) == 0) { $mov_custo = $custoproduto; echo "1";}
// se não alterou o preco de venda, mantem o preco de venda velho
if ( floatval($mov_venda) == 0) { $mov_venda = $vendaproduto; echo "2";}
// soma a quantidade digitada com a quantidade que já tem em produtos
$quantidadeatual = $mov_quantidade + $quantidadeproduto;
$sql = "BEGIN;";
mysqli_query($conexao,$sql);

// incluir na tabela de movimentacao (o que eu digitei)
$sql = "INSERT INTO movimentacao (mov_barras, mov_custo, mov_venda, mov_quantidade, mov_datahora) VALUES ('$chave','$mov_custo','$mov_venda','$mov_quantidade','$mov_datahora')";
// executar a query
if ($resultado = mysqli_query($conexao,$sql) ) {
	// deu certo incluir movimentação

	// atualizar a quantidade na tabela de produtos
	$sql = "UPDATE produtos SET custo = '$mov_custo', venda = '$mov_venda', quantidade = '$quantidadeatual' WHERE codigodebarras = '$chave'";
	if ($resultado = mysqli_query($conexao,$sql) ) {
		// deu certo atualizar a tabela de produtos
		$sql = "COMMIT;";
		mysqli_query($conexao,$sql);
        echo '<div align="center" style="margin-top:250px;">';  
        echo "<h1>Produto atualizado com sucesso!</h1>";
        echo '<a href="./movimentacao.php"><button class="btn" id="btnsub">Voltar</button></a>';
        echo "</div>";
	}
	else
	{
		// não atualizou produtos
		//echo "Não atualizou produtos <br>" . $sql;
		$sql = "ROLLBACK;";
		mysqli_query($conexao,$sql);
        echo '<div align="center" style="margin-top:250px;">';  
        echo "<h1>Algo de errado aconteceu!</h1>";
        echo '<a href="./movimentacao.php"><button>Voltar</button></a>';
        echo $conexao->error . '<br>' . $sql;
        echo "</div>";
	}
}
else
{
	// deu errado na inclusao da tabela de movimentação
	// echo "Não incluiu movimentacao <br>" . $sql;
	$sql = "ROLLBACK;";
	mysqli_query($conexao,$sql);
    echo '<div align="center" style="margin-top:250px;">';  
    echo "<h1>Algo de errado aconteceu!</h1>";
    echo '<a href="./movimentacao.php"><button>Voltar</button></a>';
    echo $conexao->error . '<br>' . $sql;
    echo "</div>";
}

// fecha a conexao com o banco de dados
$conexao->close();

?>