<html>

<head>

<title>Assistência à Comunidade</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript"
	src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript"
	src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery.mask.min.js"></script>
<script type="text/javascript" src="js/datepicker-pt-BR.js"></script>
<script type="text/javascript" src="js/monthly.js"></script>
<link href="fullcalendar-3.0.1/fullcalendar.css" rel="stylesheet" type="text/css">
<script src="fullcalendar-3.0.1/lib/moment.min.js"></script>
<script src="fullcalendar-3.0.1/fullcalendar.js"></script>
<script src='fullcalendar-3.0.1/locale/pt-br.js'></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/styleIndex.css" rel="stylesheet" type="text/css">
<link href="css/cssIndex.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/meuscript.js"></script>


</head>

<body>
	<div class="section section-primary" id="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-1">
					<img src="imgs/logo.png" alt="logo" height="100px" width="120px">
				</div>
				<div class="col-md-10 text-center">
					<h1>SISTEMA DE ASSISTÊNCIA SOCIAL</h1>
					<p>Gerenciamento de Estoque, Membros, Eventos e Usuários</p>
				</div>
				<div class="col-md-1">
					<a href="perfil.php"><i class="fa fa-4x fa-fw fa-user text-inverse"></i></a>
					<h5 class="text-center">PERFIL</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="section">
		<div class="container" id="painel">
			<div class="row">
				<div class="col-md-4 text-left">
					<div class="row">
						<div class="col-md-3 text-center">
							<a href="#"><i
								class="fa fa-4x fa-align-justify fa-fw text-primary"></i></a>
						</div>
						<div class="col-md-9" id="buttons">
							<a class="btn btn-block btn-default btn-lg"
								href="telaPrincipal.php">Tela Principal</a> <a
								class="btn btn-block btn-default btn-lg"
								href="listarEventos.php">Listar Eventos</a>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-3 text-center">
							<a href="#"><i class="fa fa-4x fa-fw text-primary fa-dropbox"></i></a>
						</div>
						<div class="col-md-9" id="buttons">
							<a class="btn btn-block btn-default btn-lg" id="inserirEstoque"
								name="inserirEstoque" href="inserirEstoque.php">Inserir
								Doação/Arrecadação</a> <a
								class="btn btn-block btn-default btn-lg" id="listarDoacoes"
								name="listarDoacoes" href="listarDoacoes.php">Listar Doações<br></a>
							<a class="btn btn-block btn-default btn-lg"
								href="listarArrecadacoes.php">Listar Arrecadações<br></a> <a
								class="btn btn-block btn-default btn-lg"
								href="controleProdutos.php">Controle de Produtos<br></a>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-3 text-center">
							<a href="#"><i class="fa fa-4x fa-child fa-fw text-primary"></i></a>
						</div>
						<div class="col-md-9" id="buttons">
							<a class="btn btn-block btn-default btn-lg" id="inserirUsuario"
								name="inserirUsuario" href="inserirUsuario.php">Inserir Usuário</a>
							<a class="btn btn-block btn-default btn-lg" id="listarUsuarios"
								name="listarUsuarios" href="listarUsuarios.php">Listar Usuários</a>
							<a class="btn btn-block btn-default btn-lg" id="inserirMembro"
								name="inserirMembro" href="inserirMembro.php">Inserir Membro<br></a>
							<a class="btn btn-block btn-default btn-lg"
								href="listarDoadores.php">Listar Doadores</a> <a
								class="btn btn-block btn-default btn-lg"
								href="listarAssistidos.php">Listar Assistidos</a>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-3 text-center">
							<a href="#"><i class="fa fa-4x fa-fw text-primary fa-area-chart"></i></a>
						</div>

					</div>
				</div>
				<div id="conteudo">

					<div class="container row">

						<div class="calendar col-md-8">

						
						</div>

					</div> <!-- end container -->
				</div>
			</div>
		</div>
	</div>


</body>
</html>
