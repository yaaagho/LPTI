<?php

// PEGANDO O NOME DOS MEMBROS PARA LISTAGEM
$url = 'http://ec2-52-43-236-116.us-west-2.compute.amazonaws.com:8080/ac/rest/estoque/procurarTipo/2';
$ch = curl_init ( $url );
curl_setopt ( $ch, CURLOPT_TIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 5 );
curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
$data = curl_exec ( $ch );
curl_close ( $ch );
$array = json_decode ( $data );
$doacao = array_reverse ( $array );

?>

<div id="conteudo">
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">ARRECADAÇÕES</h1>
				<br>
			</div>
		</div>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th class="info">#</th>
					<th class="info">Produto</th>
					<th class="info">Quantidade</th>
					<th class="info">Doador</th>
					<th class="info">Data</th>
					<th class="info">Responsável</th>
					<th class="info">Excluir</th>
					<th class="info">Editar</th>
				</tr>
			</thead>
			<tbody>
					<?php $i = 1; foreach($doacao as $lista){ ?>
											<tr>
					<td><?php echo $i ?></td>
					<td><?php echo $lista->produto ?></td>
					<td><?php echo $lista->quantidade ?></td>
					<td><?php echo $lista->doador ?></td>
					<td><?php echo $lista->data ?></td>
					<td>Responsável</td>
					<td><a
						href="delete.php?id=<?php echo "estoque/deletar/".$lista->id ?>"
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
