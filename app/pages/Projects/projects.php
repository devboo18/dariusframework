
<main class="container">

    <div class="jumbotron bg-dark">
        <h1 class="display-4">Projetos</h1>
        <p class="lead">O controle de usuários permite melhor controle de quem possui acesso ao sistema.</p>
        <!-- <hr class="my-4"> -->
        <p>Crie, edite, libere acessos e acrescente novos colaboradores</p>
        <p class="lead">
            <a class="btn btn-light btn-lg" href="/projects/novo-projeto" role="button">Novo projeto</a>
        </p>
    </div>
        
    <hr>
    <?php foreach ($projetos as $p) : ?>

        <?= Library\ViewLoader::getComponent('projectcard',$p); ?>

    <?php endforeach; ?>
 
 
</main>