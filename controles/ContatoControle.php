<?php

class ContatoControle extends Controle {

    public function index() {
        $this->visao->render('contato/cadastro');
    }

    public function add() {
        $nome = \filter_input(\INPUT_POST, 'nome', \FILTER_SANITIZE_STRING);
        $email = \filter_input(\INPUT_POST, 'email', \FILTER_SANITIZE_STRING);
        $telefone = \filter_input(\INPUT_POST, 'telefone', \FILTER_SANITIZE_STRING);

        $this->modelo('ContatoModelo');
        $objContato = $this->ContatoModelo->add($nome, $email, $telefone);
        $this->listar();
    }

    public function listar() {

        $this->modelo('ContatoModelo');
        $objContato = array();
        $objContato = $this->ContatoModelo->listar();

        $this->visao->bind('objContato', $objContato);
        $this->visao->render('contato/index');
    }

}
