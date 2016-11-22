
<div id="conteudo">
	<div class="row">

		<div class="col-md-4" id="formulario">

			<div class="row">

				<div class="col-md-12">

					<h1 class="text-center">INSERIR USUÁRIO</h1>
					<br>
				</div>
			</div>

			<div class="row">

				<div class="col-md-12">

					<form method="post" id="ajax_post" action="" name="form"
						class="form-horizontal text-left" role="form">




						<div class="form-group">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Tipo</label>
							</div>

							<div class="col-sm-10">

								<select name="tipo">
									<option></option>
									<option value="1">Administrador</option>
									<option value="2">Usuário</option>
								</select>
							</div>
						</div>

						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Nome</label>
							</div>

							<div class="col-sm-10">

								<input name="nome" type="text" required="required"
									class="form-control input-lg" id="inputPassword3"
									placeholder="Qual o nome do usuário?">

							</div>
						</div>

						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Endereço</label>
							</div>

							<div class="col-sm-10">

								<input name="endereco" type="text" required="required"
									class="form-control input-lg" id="inputPassword3"
									placeholder="Qual o endereço do usuário?">

							</div>
						</div>

						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Telefone</label>
							</div>

							<div class="col-sm-10">

								<input name="telefone" id="telefone" type="tel"
									required="required" class="form-control input-lg"
									placeholder="Qual o telefone do usuário?">
							</div>
						</div>

						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">CPF</label>
							</div>

							<div class="col-sm-10">

								<input name="cpf" type="tel" required="required"
									class="form-control input-lg" id="cpf"
									placeholder="Qual o CPF do usuário?">
							</div>
						</div>


						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Login</label>
							</div>

							<div class="col-sm-10">

								<input name="login" type="text" required="required"
									class="form-control input-lg" id="inputPassword3"
									placeholder="Qual será o login do usuário?">

							</div>
						</div>

						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">E-mail</label>
							</div>

							<div class="col-sm-10">

								<input name="email" type="email" required="required"
									pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
									class="form-control input-lg" id="inputPassword3"
									placeholder="Qual o email do usuário?">

							</div>
						</div>


						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Senha</label>
							</div>

							<div class="col-sm-10">

								<input name="senha" type="password" required="required"
									title="Somente nÃºmeros." class="form-control input-lg"
									id="inputPassword3"
									placeholder="Qual será a senha do usuário?">

							</div>
						</div>


						<div class="row">

							<div class="col-md-6 text-center">

								<button type="submit" id="post" name="post"
									class="btn btn-lg btn-success" href="addUsuario.php">Enviar</button>
							</div>

							<div class="col-md-6 text-center">

								<a class="btn btn-danger btn-lg" href="telaPrincipal.php">Cancelar</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>

</body>
</html>
