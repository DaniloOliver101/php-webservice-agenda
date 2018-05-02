<?php

/**
 * Classe que controla a página inicial do sistema
 */
class HomeControle extends Controle {

    /**
     * Método executado se nada for informado
     */
    public function index() {
        $this->visao->render('usuario/index');
    }

}
