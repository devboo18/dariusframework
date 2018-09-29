<main class="container">

	<div class="row">

		<div class="col-md-12">
			<h2>Cadastro de um novo cliente</h2><br>

			<form data-href="/clients/requests/novo-cliente" data-redirect="/clients">

				<div class="row">
					<div class="col-md-6">
							
						<div class="form-group">
				
						   <input type="text" class="form-control" name="nome" placeholder="Insira o nome completo" autocomplete="OFF">
						
						</div>
						
						<div class="form-group">
						
						   <input type="text" class="form-control" name="endereco" placeholder="Insira o endereço" autocomplete="OFF">
						
						</div>

						<div class="form-group">
						
						   <input type="text" class="form-control" name="telefone" placeholder="Insira o numero de telefone"autocomplete="OFF">
						
						</div>

						<div class="form-group">
						
						   <input type="text" class="form-control" name="celular" placeholder="Insira o numero de celular"autocomplete="OFF">
						
						</div>

					</div>

					<div class="col-md-6">
						
						<div class="form-group">
				
						   <input type="text" class="form-control" name="email" placeholder="Insira o seu email"autocomplete="OFF">
						
						</div>

						<div class="form-group">
						
						   <input type="text" class="form-control" name="empresa" placeholder="Insira o nome da empresa"autocomplete="OFF">
						
						</div>

						<div class="form-group">
						
						   <input type="text" class="form-control" name="cpf" placeholder="Insira o CPF" autocomplete="OFF">
						
						</div>

						<div class="form-group">
						
						   <input type="text" class="form-control" name="cnpj" placeholder="Insira o CNPJ"autocomplete="OFF">
						
						</div>				

					</div>
				</div>
			
		

				<hr>

				<a class="btn btn-danger" href="/clients">voltar</a>
				<button class="btn btn-success submit" href="novo-cliente">Cadastrar</button>

			</form>

		</div>

	</div>
</main>