<?php
    require_once "conexao.php";
    require_once "links.php";
    $chave = $_POST['cnpjforndel'];
    $sql = "DELETE FROM fornecedores WHERE cnpj = '$chave'";

    if($resultado = mysqli_query($conexao,$sql)){
        //echo $sql . "<br>";
        echo '<div align="center" style="margin-top:250px;">';  
        echo "<h1>Fornecedor excluido com sucesso!</h1>";
        echo '<a href="./relatorios.php"><button class="btn" id="btnsub">Voltar</button></a>';
        echo "</div>";
    }else{
        echo '<div align="center" style="margin-top:250px;">';  
        echo "<h1>Fornecedor não foi excluido!</h1>";
        echo '<a href="./relatorios.php"><button class="btn" id="btnsub">Voltar</button></a>';
        echo "</div>";
        echo $sql . "<br>" . $conexao->erro . "<br>";
    }

?>