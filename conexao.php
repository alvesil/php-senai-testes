<?php
//declarações das variáveis de conexão
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'vespertino';
//criando uma conexao com mysql
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if ($conexao->connect_error) {
    die('A conexão falhou:' . $conexao->connect_error);
}
//echo "Conetado ao banco de dados com sucesso!.";
?>