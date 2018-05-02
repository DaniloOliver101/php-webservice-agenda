<?php require ABSPATH . '/visoes/assets/includes/header.php'; ?>
<div class="col-md-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h1>Cadastrar Usuário</h1>
                <hr />
            </div>
        </div>
        <form class="form-horizontal" role="form" action="?controle=Usuario&amp;acao=add" method="POST">
            <div class="form-group">
                <label for="nome" class="col-sm-4 control-label">Nome</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
                </div>
            </div>
            <div class="form-group">
                <label for="usuario" class="col-sm-4 control-label">Usuário</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Digite um nome de usuário">
                </div>
            </div>
            <div class="form-group">
                <label for="senha" class="col-sm-4 control-label">Senha</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
                </div>
            </div>    

            <hr />
            <div class="form-group">
                <div class="col-sm-offset-4 col-sm-4">
                    <br />
                    <button type="submit" class="btn btn-primary">
                        <span class="glyphicon glyphicon-record"></span>
                        Inserir
                    </button>
                </div>
            </div>
        </form>
    </div>
    <?php require ABSPATH . '/visoes/assets/includes/footer.php'; ?>
