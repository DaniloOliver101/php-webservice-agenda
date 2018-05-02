<?php

// Caminho para a raiz
define('ABSPATH', dirname(__FILE__));

// Nome da aplicação
define('DB_APP', 'WEBSERVICE ANDROID');

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

// Se você estiver desenvolvendo, modifique o valor para true
define('DEBUG', false);

// Carrega o loader, que vai carregar a aplicação inteira
require_once ABSPATH . '/loader.php';
