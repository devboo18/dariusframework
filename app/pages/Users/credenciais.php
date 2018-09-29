<main class="container">

	<div class="row">

		<div class="col-md-4">
			<h2>Alterar este cadastro</h2><br>

			<form data-href="/users/requests/editar-credenciais/<?=$id_usuario?>" data-redirect="/users">

				<div class="form-group">
				
				   <input type="text" class="form-control" name="username" placeholder="Digite um username" autocomplete="OFF" value="<?=$username?>">
				
				</div>

				<hr>

				<a class="btn btn-danger" href="/users">Voltar</a>
				<button class="btn btn-success submit" href="editar-usuario/<?=$id_usuario?>">Alterar</button>

			</form>

		</div>

	</div>
</main>