<?php

include_once './Conexao.php';

class Webservice extends Conexao {

    public $conexao = null;

    public function __construct() {
        $this->conexao = Conexao::getConnection();
    }

    public function listarTodos($usuario, $senha) {

        $query = "SELECT id FROM usuarios WHERE usuario = :usuario AND senha = :senha";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(":usuario", $usuario, PDO::PARAM_STR);
        $stmt->bindValue(":senha", $senha, PDO::PARAM_STR);
        $stmt->execute();
        $rs_usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        $query = "SELECT id, nome, email, telefone FROM contatos WHERE usuario_id = :usuario_id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":usuario_id", $rs_usuario['id'], PDO::PARAM_INT);
        $stmt->execute();
        $rs_contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rs_contatos;
    }

    public function listarPesquisa($usuario, $senha, $id) {

        $query = "SELECT id FROM usuarios WHERE usuario = :usuario AND senha = :senha";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(":usuario", $usuario, PDO::PARAM_STR);
        $stmt->bindValue(":senha", $senha, PDO::PARAM_STR);
        $stmt->execute();
        $rs_usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        $query = "SELECT id, nome, email, telefone FROM contatos WHERE usuario_id = :usuario_id  AND id = :id";
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(":usuario_id", $rs_usuario['id'], PDO::PARAM_INT);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
        $rs_contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rs_contatos;
    }

}
