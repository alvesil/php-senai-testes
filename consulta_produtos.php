<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
	<?php include 'links.php' ?>
    <title>Consulta</title>
</head>
<body>
<?php
	include_once 'conexao.php';
	include_once 'cabecalho.php';
	include_once 'funcoes.php';
	//testa se veio nome no $_post com nome chave 
	if (isset($_POST['chave_produto'])){
		/*echo "<br><br><br><br><br>se veio algo gurdar em pesquisa";
		echo $_POST['chave'];*/
		$pesquisa = $_POST['chave_produto'];
		//sim
		//echo "<br><br><br><br>"; 
		$chave =  $_POST['chave_produto'];
	}
	else {
		// se nao veio nada, coloca nulo ou ' 'em pesquisa
		$pesquisa = '';
		//echo "<br><br><br><br> nao veio a chave";
	}

	//cria a query que busca na tabela de clientes um cpf= pesquisa 
	// ou nome que faca parte de algum resgistro na tablea 

    $sql_produto = "SELECT * FROM produtos WHERE codigodebarras LIKE '%$pesquisa%'  OR descricao LIKE '%$pesquisa%'";
    
	$resultado_produto = mysqli_query($conexao,$sql_produto);
	echo $conexao->error;
	?>
    
    <nav class="navbar navbar-light bg-light">
		<div class="container-fluid w-25">
			<form class="d-flex" action="consulta_produtos.php" method="POST">
			<input style="width:340px;" class="form-control me-2" type="search" placeholder="Informe o código de barras ou a Descrição" aria-label="Search" name="chave_produto">
			<button id="btnsub" class="btn btn-outline-success" type="submit">Consultar</button>
			</form>
		</div>
	</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col">CÓDIGO DE BARRAS</th>
      <th scope="col">DESCRIÇÃO</th>
      <th scope="col">CUSTO</th>
      <th scope="col">VENDA</th>
      <th scope="col">FORNECEDOR</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	while ($linha_produto = mysqli_fetch_assoc($resultado_produto)){  

  		$codigodebarras = $linha_produto['codigodebarras'];
  		$descricao = $linha_produto['descricao'];
  		$custo = $linha_produto['custo'];
  		$venda = $linha_produto['venda'];
  		$fornecedor = $linha_produto['fornecedor'];
    if (!isset($linha_produto)) {
        # code...
        echo $linha_produto;
    }
  	echo 
    "<tr>
      <th scope='row'>$codigodebarras</th>
      <td>$descricao</td>
      <td>$custo</td>
      <td>$venda</td>
      <td>$fornecedor</td>
    </tr>"; 
    }
	?>
  </tbody>
</table>
<?php include 'scripts.php'?>
</body>
</form>