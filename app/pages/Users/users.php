
<main class="container">

    <div class="jumbotron bg-dark">
        <h1 class="display-4">Usuários</h1>
        <p class="lead">O controle de usuários permite melhor controle de quem possui acesso ao sistema.</p>
        <!-- <hr class="my-4"> -->
        <p>Crie, edite, libere acessos e acrescente novos colaboradores</p>
        <p class="lead">
            <a class="btn btn-light btn-lg" href="/users/novo-usuario" role="button">Criar Usuário</a>
        </p>
    </div>
        
    <hr>

    <?php

        $params['header'][] = "id_usuario";
        $params['header'][] = "nome";
        $params['header'][] = "email";
        $params['data'] = $usuarios;
        $params['action'] = "all_user_table";

        Library\ViewLoader::getComponent('table',$params);

    ?>
 
 
</main>