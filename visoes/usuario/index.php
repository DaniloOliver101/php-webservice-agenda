<?php require ABSPATH . '/visoes/assets/includes/header.php'; ?>

<div class="col-md-4">

    <!-- Conteúdo da página principal -->
    <div class="container-fluid">

        <!-- Produtos -->
        <div class="row">
            <div class="col-xs-12">
                <h1>Login</h1>
                <hr />
            </div>
        </div>
        <form class="form-group well" action="?controle=Usuario&acao=login" role="form" method="post">
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                    <input class="form-control" name="usuario" type="text" placeholder="Digite o usuário">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                    <input type="password" name="senha" class="form-control" id="exampleInputPassword2" placeholder="Digite a senha">
                </div>
            </div>

            <div class="form-group">
                <?php echo (isset($erro) ? $erro : ''); ?>
                <div class="input-group">
                    <div class="g-recaptcha" data-sitekey="6LdyDlYUAAAAAJSZZOtfDI_1zNG0RGT77QiFDNyx"></div>
                    <br>
                    <?php echo (isset($google) ? $google : ''); ?>
                </div>
            </div>

            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-log-in"></span>
                Entrar
            </button>
        </form>
        <br><br>
        <?php require ABSPATH . '/visoes/assets/includes/footer.php'; ?>
