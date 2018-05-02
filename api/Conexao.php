<?php

// Caminho para a raiz
define('ABSPATH', dirname(__FILE__));

// Nome da aplicação
define('DB_APP', 'WEBSERVICE MVC');

// Nome do host da base de dados
define('HOSTNAME', '');

// Banco de dados
define('DB_TYPE', 'mysql');

// Nome do DB
define('DB_NAME', '');

// Usuário do DB - modifique para seu usuário do banco
define('DB_USER', '');

// Senha do DB - modifique para sua senha do banco
define('DB_PASSWORD', '');

// Charset da conexão PDO
define('DB_CHARSET', 'utf8');

/**
 * Classe de conexão com o banco de dados
 * Esta classe cria uma conexão do tipo ConnectionFactory (fábrica de conexões)
 */
class Conexao {

    public $con = null; // variável de retorno da conexão
    public $dbType = DB_TYPE;
    public $host = HOSTNAME;
    public $user = DB_USER;
    public $password = DB_PASSWORD;
    public $db = DB_NAME;
    public $persistent = false; // conexão não persistente

    /**
     * Método construtor da classe
     * @param type $persistent
     */

    public function Conexao($persistent = false) {
        // Verifica a persistência da conexao
        if ($persistent != false) {
            $this->persistent = true;
        }
    }

    /**
     * Método que retorna uma conexão
     * @return connection
     */
    public function getConnection() {
        try {
            // Realiza a conexão com PDO
            $this->con = new PDO(
                    $this->dbType . ":host=" .
                    $this->host . ";dbname=" .
                    $this->db, $this->user, $this->password, array(
                PDO::ATTR_PERSISTENT => $this->persistent,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DB_CHARSET
                    )
            );

            // conexão realizada com sucesso, retorna conectado
            return $this->con;
        } catch (PDOException $ex) {
            // caso ocorra um erro, retorna o erro
            return $ex->getMessage();
        }
    }

    // Método que fecha uma conexão
    public function Close() {
        if ($this->con != null) {
            $this->con = null;
        }
    }

}
