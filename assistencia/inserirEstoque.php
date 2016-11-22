<?php

// PEGANDO O NOME DOS PRODUTOS PARA LISTAGEM
$url = 'http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/produto/listarTudo';
$ch = curl_init ( $url );
curl_setopt ( $ch, CURLOPT_TIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
$data = curl_exec ( $ch );
curl_close ( $ch );
$produto = json_decode ( $data );

// PEGANDO O NOME DOS ASSISTIDOS PARA LISTAGEM
$url = 'http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/membro/procurarTipo/1';
$ch = curl_init ( $url );
curl_setopt ( $ch, CURLOPT_TIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
$data = curl_exec ( $ch );
curl_close ( $ch );
$assistido = json_decode ( $data );

// PEGANDO O NOME DOS DOADORES PARA LISTAGEM
$url = 'http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/membro/procurarTipo/2';
$ch = curl_init ( $url );
curl_setopt ( $ch, CURLOPT_TIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
$data = curl_exec ( $ch );
curl_close ( $ch );
$doador = json_decode ( $data );

?>

<div id="conteudo">
	<div class="row">

		<div class="col-md-4" id="formulario">

			<div class="row">

				<div class="col-md-12">

					<h1 class="text-center">INSERIR DOAÇÃO/ARRECADAÇÃO</h1>
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
									<option value="1">Doação para um assistido</option>
									<option value="2">Arrecadação de um doador</option>
								</select>
							</div>
						</div>

						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Produto</label>
							</div>

							<div class="col-sm-10">

								<select name="produto">
									<option></option>	
												<?php foreach($produto as $lista) { ?>
												<option><?php echo $lista->nome ?></option>
												<?php }; ?>
												</select>
							</div>
						</div>
						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Assistido</label>
							</div>

							<div class="col-sm-10">

								<select name="assistido">
									<option></option>
												<?php foreach($assistido as $lista) { ?>
												<option><?php echo $lista->nome ?></option>
												<?php }; ?>
												</select>
							</div>
						</div>

						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Doador</label>
							</div>

							<div class="col-sm-10">

								<select name="doador">
									<option></option>
												<?php foreach($doador as $lista) { ?>
												<option><?php echo $lista->nome ?></option>
												<?php }; ?>
												</select>
							</div>
						</div>

						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Quantidade</label>
							</div>

							<div class="col-sm-10">

								<input name="quantidade" type="text" required="required"
									name="numbers" pattern="[0-9]+$" title="Somente números."
									class="form-control input-lg" id="inputPassword3"
									placeholder="Quanto será doado/recebido do produto?">

							</div>
						</div>

						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Data</label>
							</div>

							<div class="col-sm-10">

								<input name="data" type="text" class="form-control input-lg"
									id="data"
									placeholder="Quando esse produto foi doado/arrecadado?"
									readonly>
							</div>
						</div>

						<div class="form-group has-feedback">

							<div class="col-sm-2">

								<label for="inputEmail3" class="control-label">Usuário</label>
							</div>

							<div class="col-sm-10">

								<input name="usuario" type="text" class="form-control input-lg"
									value="Usuário" readonly>
							</div>
						</div>

						<div class="row">

							<div class="col-md-6 text-center">

								<button type="submit" id="post" class="btn btn-lg btn-success"
									href="addEstoque.php">Enviar</button>
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
