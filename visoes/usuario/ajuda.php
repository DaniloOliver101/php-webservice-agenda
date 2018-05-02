<?php require ABSPATH . '/visoes/assets/includes/header.php'; ?>
<div class="col-md-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h1>Ajuda com o Webservice</h1>
                <hr />
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <h1>Recuperar TODOS os contatos</h1>
                <p>Utilizar o endereço: <strong>ws.edsonmelo.com.br/api/?u=nome_do_usuario&s=senha_do_usuario&t=all</strong></p>
                <p>Retorno: -1 quando o usuário e/ou senha estiverem incorretos ou não houverem registros</p>

                <pre>

                { "contatos": "-1" } 
                </pre>
                <p>Retorno: JSON com a lista de contatos no formato:</p>
                <pre>

                { "contatos": 
                    [ 
                        { "id": "5", "nome": "Pedro da Silva", "email": "pedro@gmail.com", "telefone ": "0211127443243" } ] 
                        { "id": "6", "nome": "Ana Maria Santos", "email": "anams@uol.com.br", "telefone": "02111992345678" } 
                    ] 
                }
                </pre>

                <h1>Recuperar um contato ESPECÍFICO</h1>
                <p>Utilizar o endereço: <strong>ws.edsonmelo.com.br/api/?u=nome_do_usuario&s=senha_do_usuario&t=only&c=id_do_contato</strong></p>
                <p>Retorno: -1 quando o usuário e/ou senha estiverem incorretos ou não houverem registros</p>
                <pre>

                { "contatos": "-1" } 
                </pre>

                <p>Retorno: JSON com o contato solicitado no formato:</p>
                <pre>

                { "contatos": [ { "id": "5", "nome": "Pedro da Silva", "email": "pedro@gmail.com", "telefone ": "0211127443243" } ] }
                </pre>
            </div>
        </div>
    </div>
    <?php require ABSPATH . '/visoes/assets/includes/footer.php'; ?>
