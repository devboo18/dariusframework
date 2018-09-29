<div class="card bg-darius" style="width: 18rem;">
    <div class="card-header">
        <?= $nome ?>
    </div>

    <div class="card-body">
        <h5 class="card-title"><?= $id_cliente ?></h5>
        <p class="card-text"><?= $descricao ?></p>
        
    </div>

    <div class="card-footer">
        <a href="/projects/<?=$id_projeto?>" class="btn btn-dark">Entrar</a>
        <a href="/projects/<?=$id_projeto?>" class="btn btn-light">Trabalhar</a>

    </div>
</div>