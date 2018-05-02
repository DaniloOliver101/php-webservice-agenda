<?php

class ContatoModelo extends Conexao {

    public $conexao = null;

    public function __construct() {
        $this->conexao = Conexao::getConnection();
    }

    public function add($nome, $email, $telefone) {
        $query = "INSERT INTO contatos (usuario_id, nome, email, telefone) VALUES (:usuario_id, :nome, :email, :telefone)";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(":usuario_id", $_SESSION['usuario_id'], PDO::PARAM_INT);
        $stmt->bindValue(":nome", $nome, PDO::PARAM_STR);
        $stmt->bindValue(":email", $email, PDO::PARAM_STR);
        $stmt->bindValue(":telefone", $telefone, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function listar() {
        $query = "SELECT * FROM contatos WHERE usuario_id = :usuario_id";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(":usuario_id", $_SESSION['usuario_id'], PDO::PARAM_INT);
        $stmt->execute();

        $rs_contatos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $rs_contatos;
    }

}
