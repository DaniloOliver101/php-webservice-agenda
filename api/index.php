<?php

if (isset($_GET['u']) && isset($_GET['s'])) {
    include './Webservice.php';
    $usuario = \filter_input(\INPUT_GET, 'u', \FILTER_SANITIZE_STRING);
    $senha = \filter_input(\INPUT_GET, 's', \FILTER_SANITIZE_STRING);

    $tipo = \filter_input(\INPUT_GET, 't', \FILTER_SANITIZE_STRING);

    if ($tipo == 'all') {
        $result = new Webservice();
        $dados = $result->listarTodos($usuario, $senha);

        if (count($dados) > 0) {
            $prepara = array("contatos" => $dados);
        } else {
            $prepara = array("contatos" => '-1');
        }
    } else {
        $id = \filter_input(\INPUT_GET, 'c', \FILTER_SANITIZE_NUMBER_INT);
        $result = new Webservice();
        $dados = $result->listarPesquisa($usuario, $senha, $id);

        if (count($dados) > 0) {
            $prepara = array("contatos" => $dados);
        } else {
            $prepara = array("contatos" => '-1');
        }
    }
    echo json_encode($prepara, JSON_PRETTY_PRINT);
} else {
    header("Location: http://ws.edsonmelo.com.br");
}
