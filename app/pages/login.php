<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="<?= APPCSS . 'bootstrap.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?= APPCSS . 'login-style.css'?>">

</head>
<body class="text-center">
	<div class='container'>
		
		<form class="form-signin text-center" action="/login" method='POST'>

		    <img class="mb-4" src="<?= APPIMG ?>brand/bootstrap-solid.svg" alt="" width="72" height="72">
		    
		    <h1 class="h3 mb-3 font-weight-normal"></h1>
		    
		    <label for="username" class="sr-only">Nome de Usuário</label>
		    
		    <input name='username' type="text" id="username" class="form-control" placeholder="Nome de Usuário" required autofocus autocomplete="OFF">
		    
		    <br>

		    <label for="password" class="sr-only">Senha</label>
		    <input name ='password' type="password" id="pwd" class="form-control" placeholder="Senha" required autocomplete="OFF">
		    
		    <button class="btn btn-lg btn-light btn-block" type="submit">Entrar</button>
			<a href="https://www.facebook.com/dialog/oauth?client_id=<?=FACEBOOK_APPID?>&redirect_uri=<?= FACEBOOK_REDIRECT ?>&scope=<?= FACEBOOK_SCOPE ?>">Entrar com Facebook</a>
		    <button class="btn btn-lg btn-light btn-block facebook" type="facebook">Facebook</button>
		    
		    <p class="mt-5 mb-3  text-white">&copy; <?= date('Y') ?></p>

		</form>

	</div>

<script type="text/javascript" src="<?= APPJS . 'jquery.min.js'?>"></script>
<script type="text/javascript" src="<?= APPJS . 'bootstrap.min.js'?>"></script>
<script type="text/javascript" src="<?= APPJS . 'requests.js'?>"></script>
<script type="text/javascript" src="<?= APPJS . 'RT.js'?>"></script>



</body>
</html>

