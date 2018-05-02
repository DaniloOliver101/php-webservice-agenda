<?php

class Usuario {

    private $id = null;
    private $nome = null;
    private $usuario = null;
    private $senha = null;

    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
        return $this;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
        return $this;
    }

}
