<main class="container">

	<div class="row">

		<div class="col-md-4">
			<h2>Alterar este cadastro</h2><br>

			<form data-href="/users/requests/editar-usuario/<?=$id_usuario?>" data-redirect="/users">

				<div class="form-group">
				
				   <input type="text" class="form-control" name="nome" placeholder="Insira o nome completo" autocomplete="OFF" value="<?=$nome?>">
				
				</div>
				
				<div class="form-group">
				
				   <input type="text" class="form-control" name="email" placeholder="Insira o email" autocomplete="OFF" value="<?=$email?>">
				
				</div>

				<div class="form-group">
				
				   <input type="text" class="form-control" name="telefone" placeholder="Insira o numero de telefone"autocomplete="OFF" value="<?=$telefone?>">
				
				</div>

				<hr>

				<a class="btn btn-danger" href="/users">Voltar</a>
				<button class="btn btn-success submit" href="editar-usuario/<?=$id_usuario?>">Alterar</button>

			</form>

		</div>

	</div>
</main>