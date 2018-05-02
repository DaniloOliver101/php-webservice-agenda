<?php

class Contato {

    private $id = null;
    private $nome = null;
    private $email = null;
    private $telefone = null;

    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
        return $this;
    }

}
