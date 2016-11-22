<?php

// PEGANDO O NOME DOS MEMBROS PARA LISTAGEM
$url = 'http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/usuario/listarTudo';
$ch = curl_init ( $url );
curl_setopt ( $ch, CURLOPT_TIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
$data = curl_exec ( $ch );
curl_close ( $ch );
$array = json_decode ( $data );
$usuario = array_reverse ( $array );

?>

<div id="conteudo">
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">USUÁRIOS</h1>
				<br>
			</div>
		</div>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="info">#</th>
					<th class="info">Tipo</th>
					<th class="info">Nome</th>
					<th class="info">Login</th>
					<th class="info">Endereço</th>
					<th class="info">Telefone</th>
					<th class="info">CPF</th>
					<th class="info">E-mail</th>
					<th class="info">Excluir</th>
					<th class="info">Editar</th>
				</tr>
			</thead>
			<tbody>
					<?php $i = 1; foreach($usuario as $lista){ ?>
											<tr>
					<td><?php echo $i ?></td>
													<?php if ($lista->tipo == 1){ ?>
													<td><?php echo "Administrador"; ?></td>
													<?php } else { ?>
													<td><?php echo "Usuário"; }; ?></td>

					<td><?php echo $lista->nome ?></td>
					<td><?php echo $lista->login ?></td>
					<td><?php echo $lista->endereco ?></td>
					<td><?php echo $lista->telefone ?></td>
					<td><?php echo $lista->cpf ?></td>
					<td><?php echo $lista->email ?></td>
					<td><a
						href="delete.php?id=<?php echo "usuario/deletar/".$lista->id ?>"
						id="delete" name="delete"
						onClick="return confirm('Deseja realmente excluir esse registro?') ;">
							Excluir</a></td>
					<td></td>
				</tr>
									<?php $i++; }; ?>
				  </tbody>
		</table>
	</div>
</div>
</div>
</div>
</div>


</body>
</html>
