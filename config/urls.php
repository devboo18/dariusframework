<?php 

/*
    Rotas do sistema

    Aqui deve ser configurado todas as rotas do sistema
*/
$dispatcher = FastRoute\simpleDispatcher(function(FastRoute\RouteCollector $r) {
    $r->addRoute(['GET','POST'], '/',['Controllers\Main','index']);
    $r->addRoute(['GET','POST'], '/logout', ['Controllers\Login','logout']);
    $r->addRoute(['GET','POST'], '/login', ['Controllers\Login','index']);
    $r->addRoute(['GET','POST'], '/facebook-login[/]', ['Controllers\Login','facebook']);
    $r->addRoute(['GET','POST'], '/main', ['Controllers\Main','index']);
    
    $r->addRoute(['GET','POST'], '/users[/]', ['Controllers\Users','index']);
    $r->addRoute(['GET','POST'], '/clients[/]', ['Controllers\Clients','index']);
    $r->addRoute(['GET','POST'], '/projects[/]', ['Controllers\Projects','index']);
    $r->addRoute(['GET','POST'], '/project/{idprojeto}', ['Controllers\Projects','projeto']);

    $r->addRoute(['GET','POST'], '/projects/novo-projeto[/]', ['Controllers\Projects','novoProjeto']);
    $r->addRoute(['GET','POST'], '/users/novo-usuario[/]', ['Controllers\Users','novoUsuario']);
    $r->addRoute(['GET','POST'], '/users/editar-usuario/{idusuario}', ['Controllers\Users','editarUsuario']);
    $r->addRoute(['GET','POST'], '/users/editar-credenciais/{idusuario}', ['Controllers\Users','editarCredenciais']);

    $r->addRoute(['GET','POST'], '/clients/novo-cliente[/]', ['Controllers\Clients','novoCliente']);
    $r->addRoute(['GET','POST'], '/clients/editar-cliente/{idcliente}', ['Controllers\Clients','editarCliente']);

   

    $r->addRoute(['GET','POST'], '/users/requests/novo-usuario[/]', ['Server\UserRequests','novo_usuario']);
    $r->addRoute(['GET','POST'], '/users/requests/editar-usuario/{idusuario}', ['Server\UserRequests','editar_usuario']);
    $r->addRoute(['GET','POST'], '/users/requests/editar-credenciais/{idusuario}', ['Server\UserRequests','editar_credenciais']);

    $r->addRoute(['GET','POST'], '/clients/requests/novo-cliente[/]', ['Server\ClientsRequests','novo_cliente']);
    $r->addRoute(['GET','POST'], '/clients/requests/editar-cliente/{idcliente}', ['Server\ClientsRequests','editar_cliente']);

    $r->addRoute(['GET','POST'], '/requests/{table}/{method}',['Server\RequestDispatcher','index']);


});