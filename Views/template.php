<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>DietasJá</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASE_URL.'vendor/twbs/bootstrap/dist/css/bootstrap.min.css' ?>">
	<link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/reset.css' ?>">
	<link rel="stylesheet" href="<?php echo BASE_URL.'assets/css/template.css' ?>">
</head>
<body>
	<nav class="navDashboard">
		<div  class="btnMenu">
			<span class="btnMenu-line"></span>
			<span class="btnMenu-line"></span>
			<span class="btnMenu-line"></span>
		</div>

		<div id="leftMenu" class="leftMenu">
			
			<h1 class="leftMenu-logo">DietasJá</h1>

			<div class="leftMenu-user">
				<img class="leftMenu-user-img" src="<?php echo BASE_URL.'assets/images/thaylan.jpg' ?>">
				<p class="leftMenu-user-name lead">Thaylan Conceição</p>
			</div>

			<ul class="leftMenu-list">
				<li class="leftMenu-list-item">
					<a href="">Home</a>
				</li>
				<li class="leftMenu-list-item">
					<a href="">Refeições</a>
				</li>
				<li class="leftMenu-list-item">
					<a href="">Alimentos</a>
				</li>
				<li class="leftMenu-list-item">
					<a href="">Configurações</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="content">
		<h1>Home</h1>
		<?php //$this->loadViewInTemplate($viewName, $viewData); ?>
	</div>
	<script src="<?php echo BASE_URL.'vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js'?>"></script>
	<script src="<?php echo BASE_URL.'assets/js/jquery-3.3.1.min.js' ?>"></script>
	<script src="<?php echo BASE_URL.'assets/js/btnMenu.js' ?>"></script>
</body>
</html>
