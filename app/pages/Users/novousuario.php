<main class="container">

	<h2>Novo usuário</h2><br>

	<form id="novo-usuario" data-href="requests/novo-usuario" data-redirect="/users">
	
		<div class="row">
			<div class="col-md-6">

				<div class="form-group">
					
					   <input type="text" class="form-control" name="nome" placeholder="Insira o nome completo" autocomplete="OFF">
					
				</div>
					
				<div class="form-group">
					
					   <input type="text" class="form-control" name="email" placeholder="Insira o email" autocomplete="OFF">
					
				</div>

				<div class="form-group">
					
					   <input type="text" class="form-control" name="telefone" placeholder="Insira o numero de telefone"autocomplete="OFF">
					
				</div>

			</div>
			
			<div class="col-md-6">
						
					<!-- LIBERAÇÃO DAS CREDENCIAIS DE ACESSO -->
				
					<div class="form-check">
						<input class="checkbox-credenciais cb-hide-and-seek" data-id="credenciais" type="checkbox" value="" name="liberarAcesso">
						<label class="checkbox-credenciais-label" for="defaultCheck1">
							Liberar acesso do usuário
						</label>
					</div>

					<div id="credenciais" class="hide-and-seek d-none">
						
						<div class="form-group">
							
							<input type="text" name="username" class="form-control" placeholder="Username" autocomplete="off">

						</div>

						<div class="form-group">
							
							<input type="password" name="password" class="form-control" placeholder="Password">

						</div>

					</div>

					<!-- LIBERAÇÃO COLABORADOR -->
					<div class="form-check">
						<input class="checkbox-colaborador cb-hide-and-seek" data-id="colaborador" type="checkbox" value="" name="colaborador">
						<label class="checkbox-colaborador-label" for="defaultCheck1">
							Tornar usuário colaborador
						</label>
					</div>

					<div id="colaborador" class="hide-and-seek d-none">
						
						<div class="form-group">
							
							<input type="textarea" name="tags" id="tags" data-text="tags" class="form-control">
							
						</div>

						<div class="form-group">
							
							<input type="textarea" name="descricao" class="form-control" placeholder="Descrição do novo colaborador">
							
						</div>

					</div>

			</div>		

			<hr>
			<hr>

		</div>
		<br>
		<div class="row">
			
			<a class="btn btn-dark bg-dark" href="/users">Voltar</a>
			<button class="btn btn-light submit" data-idform="novo-usuario" href="novo-usuario">Cadastrar</button>
			
		</div>

	</form>

</main>

