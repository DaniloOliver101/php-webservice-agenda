<?php

class UsuarioControle extends Controle {

    public function index() {
        $this->visao->render('usuario/cadastro');
    }

    public function add() {
        $nome = \filter_input(\INPUT_POST, 'nome', \FILTER_SANITIZE_STRING);
        $usuario = \filter_input(\INPUT_POST, 'usuario', \FILTER_SANITIZE_STRING);
        $senha = \filter_input(\INPUT_POST, 'senha', \FILTER_SANITIZE_STRING);

        $this->modelo('UsuarioModelo');
        $objContato = $this->UsuarioModelo->add($nome, $usuario, $senha);
        $this->visao->render('usuario/index');
    }

    public function login() {
        $usuario_form = \filter_input(\INPUT_POST, 'usuario', \FILTER_SANITIZE_STRING);
        $senha_form = \filter_input(\INPUT_POST, 'senha', \FILTER_SANITIZE_STRING);

        // Recupera a validação do formulário
        if (isset($_POST['g-recaptcha-response'])) {
            $captcha_data = $_POST['g-recaptcha-response'];
        }

        // Se nenhum valor foi recebido, o usuário nãoo realizou o captcha
        if (!$captcha_data) {
            $this->visao->set('google', 'Por favor, confirme o captcha!');
            $this->visao->render('usuario/index');
            exit;
        }

        $usuario = new Usuario();
        $usuario->setUsuario($usuario_form);
        $usuario->setSenha($senha_form);

        $this->modelo('UsuarioModelo');
        $usuario = $this->UsuarioModelo->login($usuario);

        if ($usuario->getId() > 0) {
            $_SESSION['usuario_id'] = $usuario->getId();
            $_SESSION['usuario_nome'] = $usuario->getNome();

            $this->modelo('ContatoModelo');
            $objContato = array();
            $objContato = $this->ContatoModelo->listar();

            $this->visao->bind('objContato', $objContato);
            $this->visao->render('contato/index');
        } else {
            $this->visao->set('erro', 'Acesso Negado. Verifique seu usuário/senha.<br><br>');
            $this->visao->render('usuario/index');
        }
    }

    public function logout() {
        $_SESSION['usuario_id'] = null;
        $_SESSION['usuario_nome'] = null;
        unset($_SESSION['usuario_id']);
        unset($_SESSION['usuario_nome']);

        $this->visao->render('usuario/index');
    }

    public function ajuda() {
        $this->visao->render('usuario/ajuda');
    }

}
