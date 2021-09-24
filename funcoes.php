<?php
    //pega a data do sistema e mostra no formato dd/mm/aaaa hh:mm:ss
    function dataSistemaTela(){
        date_default_timezone_set('America/Sao_paulo');
        return date('d/m/Y H:i:s');
    }
    //formata o valor passado na variável $valor e devolve
    function formataValor($valor){
        return number_format($valor,2,',','.');
    }
    //formata a data de aaaa/mm/dd para dd/mm/aaaa
    function formataData($data){
        //quebra a variável $data em pedaços, em um array
        $parte = explode('-',$data);
        return $parte[2] . '/' . $parte[1] . '/' . $parte[0];
    }
    function alertaCadastroSucesso($mensagem){
        
        echo'
        <div align="center" class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>' .
        $mensagem . '
        </strong>
        <!--<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>-->
        </div>';
    }
    function alertaCadastrofalha($mensagem){
        
        echo'
        <div align="center" class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>' .
        $mensagem . '
        </strong>
        <!--<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>-->
        </div>';
    }
?>