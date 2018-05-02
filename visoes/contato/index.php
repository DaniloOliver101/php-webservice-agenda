<?php require ABSPATH . '/visoes/assets/includes/header.php'; ?>

<div class="col-md-10">

    <!-- Conteúdo da página principal -->
    <div class="container-fluid">

        <!-- Contatos -->
        <div class="row">
            <div class="col-xs-12">
                <h1>Lista de Contatos</h1>
                <hr />
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                </tr>
                <?php foreach ($objContato as $contato) { ?>
                    <tr>
                        <td><?php echo $contato['id']; ?></td>
                        <td><?php echo $contato['nome']; ?></td>
                        <td><?php echo $contato['email']; ?></td>
                        <td><?php echo $contato['telefone']; ?></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <?php require ABSPATH . '/visoes/assets/includes/footer.php'; ?>
