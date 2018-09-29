<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-darius">
      <a class="navbar-brand" href="#">Darius</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/main">Inicio <span class="sr-only"></span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/users">Usuários</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/clients">Clientes</a>
          </li>
        </ul>
        <div class="dropdown show">

          <a class="btn btn-light dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <?= '@'.$_SESSION['userdata']['username']; ?>

          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="/users/perfil-usuario">Meu Perfil</a>
            <a class="dropdown-item" href="/configuracoes">Configurações</a>
            <a class="dropdown-item" href="/logout">Sair</a>
          </div>
        </div>

      </div>
    </nav>