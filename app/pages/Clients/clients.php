
<main class="container">

    <div class="jumbotron bg-dark">
        <h1 class="display-4">Clientes</h1>
        <p class="lead">Os clientes são parte importante da empresa. Administre-os aqui.  </p>
        <!-- <hr class="my-4"> -->
        <p>Todos clientes da empresa devem constar aqui para melhor gestão dos lucros.</p>
        <p class="lead">
            <a class="btn btn-light btn-lg" href="/clients/novo-cliente" role="button">Novo cliente</a>
        </p>
    </div>
        
    <hr>

    <?php

        $params['header'][] = "id_cliente";
        $params['header'][] = "nome";
        $params['header'][] = "empresa";
        $params['header'][] = "email";
        $params['header'][] = "celular";
        $params['data'] = $clients;
        $params['action'] = "all_clients_table";

        Library\ViewLoader::getComponent('table',$params);

    ?>
 
 
</main>