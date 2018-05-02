<?php require ABSPATH . '/visoes/assets/includes/header.php'; ?>
<div class="col-md-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h1>Cadastrar Contato</h1>
                <hr />
            </div>
        </div>
        <form class="form-horizontal" role="form" action="?controle=Contato&amp;acao=add" method="POST">
            <div class="form-group">
                <label for="nome" class="col-sm-4 control-label">Nome</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
                </div>
            </div>
            <div class="form-group">
                <label for="resumo" class="col-sm-4 control-label">Email</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="email" name="email" placeholder="Digite o email">
                </div>
            </div>
            <div class="form-group">
                <label for="telefone" class="col-sm-4 control-label">Telefone</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
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
