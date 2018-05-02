<?php

/**
 * Model para o usuário
 */
class UsuarioModelo extends Conexao {

    public $conexao = null;

    public function __construct() {
        $this->conexao = Conexao::getConnection();
    }

    public function add($nome, $usuario, $senha) {
        $query = "INSERT INTO usuarios (nome, usuario, senha) VALUES (:nome, :usuario, :senha)";
        $stmt = $this->conexao->prepare($query);
        
        $stmt->bindValue(":nome", $nome, PDO::PARAM_STR);
        $stmt->bindValue(":usuario", $usuario, PDO::PARAM_STR);
        $stmt->bindValue(":senha", $senha, PDO::PARAM_STR);
        $stmt->execute();
    }

    public function login(Usuario $usuario) {
        $query = "SELECT * FROM usuarios WHERE usuario = :usuario AND senha = :senha";
        $stmt = $this->conexao->prepare($query);

        $stmt->bindValue(":usuario", $usuario->getUsuario(), PDO::PARAM_STR);
        $stmt->bindValue(":senha", $usuario->getSenha(), PDO::PARAM_STR);
        $stmt->execute();

        $rs_usuario = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($rs_usuario as $rs) {
            $usuario = new Usuario();
            $usuario->setId($rs['id']);
            $usuario->setNome($rs['nome']);
            $usuario->setUsuario($rs['usuario']);
            $usuario->setSenha($rs['senha']);
        }
        return $usuario;
    }

}
