<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header ("Location: ../index.php");
	}
?>

<!doctype html>
<html class="fixed">
<head>
	<!-- Basic -->
	<meta charset="UTF-8">

	<title>Adicionar Tipo</title>
	
	<!-- Mobile Metas -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.css" />
	<link rel="stylesheet" href="../assets/vendor/magnific-popup/magnific-popup.css" />
	<link rel="stylesheet" href="../assets/vendor/bootstrap-datepicker/css/datepicker3.css" />
	<link rel="icon" href="../img/logofinal.png" type="image/x-icon">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="../assets/stylesheets/theme.css" />

	<!-- Skin CSS -->
	<link rel="stylesheet" href="../assets/stylesheets/skins/default.css" />

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="../assets/stylesheets/theme-custom.css">

	<!-- Head Libs -->
	<script src="../assets/vendor/modernizr/modernizr.js"></script>

	<!-- Javascript functions -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  	<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://translate.googleapis.com/translate_static/css/translateelement.css">

</head>
<body>
	<section class="body">

		<!-- start: header -->
		<div id="header"></div>
			
		<!-- end: header -->
		<div class="inner-wrapper">
			<!-- start: sidebar -->
			<aside id="sidebar-left" class="sidebar-left menuu"></aside>
			<!-- end: sidebar -->

			<section role="main" class="content-body">
				<header class="page-header">
					<h2>Cadastro</h2>
					<div class="right-wrapper pull-right">
						<ol class="breadcrumbs">
							<li>
								<a href="home.php">
									<i class="fa fa-home"></i>
								</a>
							</li>
							<li><span>Páginas</span></li>
							<li><span>Adicionar Tipo</span></li>
						</ol>
					
						<a class="sidebar-right-toggle"><i class="fa fa-chevron-left"></i></a>
					</div>
				</header>

				<!-- start: page -->
				<div class="row">
					<div class="col-md-4 col-lg-2" style="visibility: hidden;"></div>
					<div class="col-md-8 col-lg-8" >
						<div class="tabs">
							<ul class="nav nav-tabs tabs-primary">
								<li class="active">
									<a href="#overview" data-toggle="tab">Adicionar tipo saida</a>
								</li>
							</ul>
							<div class="tab-content">
								<div id="overview" class="tab-pane active">
									<fieldset>
										<form method="post" id="formulario" action="../controle/control.php">
											<div class="form-group"><br>
												<label class="col-md-3 control-label">saida</label>
												<div class="col-md-8">
													<input type="text" class="form-control" name="descricao" id="tiposaida" required>
												</div>
											</div><br/>
											
											<input type="hidden" name="nomeClasse" value="TipoSaidaControle">
											
											<input type="hidden" name="metodo" value="incluir">
											
											<div class="row">
												<div class="col-md-9 col-md-offset-3">
													<button id="enviar" class="btn btn-primary" type="submit">Enviar</button>
													
													<input type="reset" class="btn btn-default">
													
													<a href="cadastro_saida.php" style="color: white; text-decoration: none;">
														<button class="btn btn-info" type="button">Voltar</button>
													</a>
													
													<a href="listar_tipoSaida.php" style="color: white; text-decoration:none;">
														<button class="btn btn-success" type="button">Listar Saida</button>
													</a>
												</div>
											</div>
										</form>
									</fieldset>	
								</div>
							</div>
						</div>
					</div>
				</div>
			<!-- end: page -->
		</section>
			
		<aside id="sidebar-right" class="sidebar-right">
			<div class="nano">
				<div class="nano-content">
					<a href="#" class="mobile-close visible-xs">
						Collapse <i class="fa fa-chevron-right"></i>
					</a>
				</div>
			</div>
		</aside>
	</section>
	<!-- Vendor -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.js"></script>
	<script src="../assets/vendor/nanoscroller/nanoscroller.js"></script>
	<script src="../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="../assets/vendor/magnific-popup/magnific-popup.js"></script>
	<script src="../assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
	<!-- Specific Page Vendor -->
	<script src="../assets/vendor/jquery-autosize/jquery.autosize.js"></script>
		
	<!-- Theme Base, Components and Settings -->
	<script src="../assets/javascripts/theme.js"></script>
		
	<!-- Theme Custom -->
	<script src="../assets/javascripts/theme.custom.js"></script>
		
	<!-- Theme Initialization Files -->
	<script src="../assets/javascripts/theme.init.js"></script>


	<!-- javascript functions --> 
	<script src="../Functions/onlyNumbers.js"></script> 
	<script	src="../Functions/onlyChars.js"></script> 
	<script	src="../Functions/mascara.js"></script>

	<!-- jquery functions -->
	<script>
    	document.write('<a href="' + document.referrer + '"></a>');
    	$(function () {
            $("#header").load("header.html");
            $(".menuu").load("menu.html");
        });
	</script>
</body>
</html>
