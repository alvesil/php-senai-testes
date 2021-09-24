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
	if (isset($_POST['chave_cliente'])){
		/*echo "<br><br><br><br><br>se veio algo gurdar em pesquisa";
		echo $_POST['chave'];*/
		$pesquisa_cliente = $_POST['chave_cliente'];
		//sim
		//echo "<br><br><br><br>"; 
		$chave =  $_POST['chave_cliente'];
	}
	else {
		// se nao veio nada, coloca nulo ou ' 'em pesquisa
		$pesquisa_cliente = '';
		//echo "<br><br><br><br> nao veio a chave";
	}

	//cria a query que busca na tabela de clientes um cpf= pesquisa 
	// ou nome que faca parte de algum resgistro na tablea 

	$sql_cliente = "SELECT * FROM clientes WHERE cpf LIKE '%$pesquisa_cliente%'  OR nome LIKE '%$pesquisa_cliente%'";
    
	$resultado_cliente = mysqli_query($conexao,$sql_cliente);
	echo $conexao->error;
	?>
	<nav class="navbar navbar-light bg-light">
		<div class="container-fluid w-25">
			<form class="d-flex" action="consulta_clientes.php" method="POST">
			<input style="width:220px;" class="form-control me-2" type="search" placeholder="Informe o CPF ou Nome" aria-label="Search" name="chave_cliente">
			<button id="btnsub" class="btn btn-outline-success" type="submit">Consultar</button>
			</form>
		</div>
	</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col">CPF</th>
      <th scope="col">NOME</th>
      <th scope="col">TELEFONE</th>
      <th scope="col">ENDERECO</th>
      <th scope="col">NUMERO</th>
      <th scope="col">BAIRRO</th>
      <th scope="col">CIDADE</th>
      <th scope="col">UF</th>
    </tr>
  </thead>
  <tbody>
  	<?php 
  	while ($linha_cliente = mysqli_fetch_assoc($resultado_cliente)){  

  		$cpf = $linha_cliente['cpf'];
  		$nome = $linha_cliente['nome'];
  		$datanascimento = $linha_cliente['datanascimento'];
  		$endereco = $linha_cliente['endereco'];
  		$numerodeendereco = $linha_cliente['numeroendereco'];
  		$bairro = $linha_cliente['bairro'];
  		$cidade = $linha_cliente['cidade'];
  		$uf = $linha_cliente['uf'];
    if (isset($linha_cliente)) {
        # code...
        //echo $linha_cliente;
    }
  	echo 
    "<tr>
      <th scope='row'>$cpf</th>
      <td>$nome</td>
      <td>".formataData($datanascimento)."</td>
      <td>$endereco</td>
      <td>$numerodeendereco</td>
      <td>$bairro</td>
      <td>$cidade</td>
      <td>$uf</td>
    </tr>"; 
    }
	?>
  </tbody>
</table>
<?php include 'scripts.php'?>
</body>
</form>