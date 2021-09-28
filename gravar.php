<?php 
echo "Este é o gravar.php <br>";
// estabelece uma conexao com o banco de dados passado parametros: servidor,usuario,senha,banco de dados
require_once "./conexao.php";

// definição das variaveis que vão pegar os valores dos campos da tela atraves do $_POST
	$chave = $_POST['cpf'];
	$nome = $_POST['nomecliente'];
	$datanascimento = $_POST['datanascimentocliente'];
	$endereco = $_POST['enderecocliente'];
	$numerodeendereco = $_POST['numeroenderecocliente'];
	$bairro = $_POST['bairrocliente'];
	$cidade = $_POST['cidadecliente'];
	$uf = $_POST['ufcliente'];
	$cep = $_POST['cepcliente'];
	$sexo = $_POST['sexocliente']; 
	$celular = $_POST['celcliente'];
	$email = $_POST['emailcliente'];
	$salario = $_POST['salariocliente'];
	$corcliente = $_POST['corcliente'];
	$curso = $_POST['cursoscliente'];

// montando o insert para executar na variavel $sql
$sql = "INSERT INTO clientes (cpf,nome,datanascimento,endereco,numeroendereco,bairro,cidade,uf,cep,sexo,celular,email,salario,
cor,cursosfeitos) VALUES ('$chave','$nome','$datanascimento','$endereco','$numerodeendereco','$bairro','$cidade','$uf','$cep','$sexo',
'$celular','$email','$salario','$corcliente','$curso')";
//echo $sql;

// montando update
/*
$sql_up = "UPDATE clientes SET cpf='$chave',cep='$cep',nome='$nome',datanascimento='$datanascimento',endereco='$endereco',numeroendereco='$numerodeendereco',
bairro='$bairro',cidade='$cidade',uf='$uf',sexo='$sexo',celular='$celular',email='$email',salario='$salario',cor='$corcliente',cursosfeitos='$curso' WHERE 1";
if (mysqli_query($conexao,$sql_up)) {
	# code...
	echo "Atualizado! <br>";
}
*/

// envia a variavel $sql para ser executada em uma fila no banco de dados e testa se deu certo
if (mysqli_query($conexao,$sql)) {
	// se deu certo a execução da query
	echo "Gravado! <br>";
	echo $sql;
}
else // se não deu certo
{
	echo "deu errado <br> ";
	echo $sql . "<br>";
	echo $conexao->error . "<br>";
}
// fecha a conexão com o banco de dados
$conexao->close();

?>
<!-- mostra um link para retornar a pagina index.php -->
<a href="./clientes.php" class="button">Voltar</a>