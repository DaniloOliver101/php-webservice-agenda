<?php if (!defined('ABSPATH')) exit; ?>

<!doctype html>
<html class="no-js">
    <head>
        <meta charset="<?php echo(DB_CHARSET); ?>">
        <title><?php echo(DB_APP); ?></title>
        <meta name="description" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, minimum-scale=1.0">

        <!-- Tags para o SEO -->
        <meta name="robots" content="all">
        <meta itemprop="name" content="<?php echo(DB_APP); ?>">
        <meta itemprop="description" content="">
        <meta name="author" content=""> 
        <meta itemprop="image" content="http://">

        <!-- Estilos originais do framework Boostrap -->
        <link rel="stylesheet" href="visoes/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="visoes/assets/css/bootstrap-theme.css" media="screen" >
        <link rel="stylesheet" href="visoes/assets/css/font-awesome.min.css">

        <!-- Estilos personalizados -->
        <link rel="stylesheet" href="visoes/assets/css/main.css">
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <!-- A aplicação começa aqui -->
        <div class="container-fluid">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><?php echo(DB_APP); ?></a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" title="" alt=""></span>&nbsp;
                                    <?php echo (isset($_SESSION['usuario_nome']) ? $_SESSION['usuario_nome'] : 'Usuário') ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <?php if (!isset($_SESSION['usuario_nome'])) { ?>

                                        <li><a class="dropdown-item" href="?controle=Usuario&acao=index">Novo</a></li>

                                    <?php } else {
                                        ?>
                                        <li><a class="dropdown-item" href="?controle=Usuario&acao=ajuda">Ajuda Webservice</a></li> 
                                        <li><a class="dropdown-item" href="?controle=Usuario&acao=logout">Sair</a></li>
                                    <?php }
                                    ?>          
                                </ul>
                            </li>
                        </ul>
                        <?php if (isset($_SESSION['usuario_nome'])) { ?>
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                        <span class="glyphicon glyphicon-list" title="Sair" alt="Sair"></span>&nbsp;Contato <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="?controle=Contato&acao=index">Novo</a></li>
                                        <li><a class="dropdown-item" href="?controle=Contato&acao=listar">Listar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        <?php } ?>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
            <!-- Menu lateral esquerdo -->
            <div class="row">
                <div class="col-md-2 hidden-xs hidden-sm">
                    <ul class="nav nav-pills nav-stacked">

                        <!-- Fim das categorias -->
                    </ul>
                </div>
                <!-- Fim do Menu lateral esquerdo -->
