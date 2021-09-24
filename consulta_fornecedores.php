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

    $sql_produto = "SELECT * FROM fornecedores WHERE cnpj LIKE '$$pesquisa$'  OR razao LIKE '%$pesquisa%'";
    
	$resultado_fornecedor = mysqli_query($conexao,$sql_produto);
	echo $conexao->error;
	?>
    
    <nav class="navbar navbar-light bg-light">
		<div class="container-fluid w-25">
			<form class="d-flex" action="consulta_fornecedores.php" method="POST">
			<input style="width:300px;" class="form-control me-2" type="search" placeholder="Informe o CNPJ ou a Razão Social" aria-label="Search" name="chave_produto">
			<button id="btnsub" class="btn btn-outline-success" type="submit">Consultar</button>
			</form>
		</div>
	</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col">CNPJ</th>
      <th scope="col">RAZÃO SOCIAL</th>
      <th scope="col">WHATSAPP</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">STATUS</th>
      <th scope="col">BANCO</th>
      <th scope="col">AGÊNCIA</th>
      <th scope="col">CONTA</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	while ($linha_fornecedor = mysqli_fetch_assoc($resultado_fornecedor)){  

  		$cnpj = $linha_fornecedor['cnpj'];
  		$razao = $linha_fornecedor['razao'];
  		$whatsapp = $linha_fornecedor['whatsapp'];
  		$email = $linha_fornecedor['email'];
  		$status = $linha_fornecedor['sts'];
  		$banco = $linha_fornecedor['banco'];
  		$agencia = $linha_fornecedor['agencia'];
  		$conta = $linha_fornecedor['conta'];
    if (!isset($linha_fornecedor)) {
        # code...
        echo $linha_fornecedor;
    }
  	echo 
    "<tr>
      <th scope='row'>$cnpj</th>
      <td>$razao</td>
      <td>$whatsapp</td>
      <td>$email</td>
      <td>$status</td>
      <td>$banco</td>
      <td>$agencia</td>
      <td>$conta</td>
    </tr>"; 
    }
	?>
  </tbody>
</table>
<?php include 'scripts.php'?>
</body>
</form>