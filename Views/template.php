<html>
<head>
	<title>DietasJá</title>
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/menu.css">
	<link rel="stylesheet" href="assets/css/btnMenu.css">
	<link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
	<nav class="wrap-menu">
		<a href="#" class="menu_logo">DietasJá</a>

		<a href="#" class="btnMenu btnMenu_open">
			<span class="btn-line"></span>
			<span class="btn-line"></span>
			<span class="btn-line"></span>
		</a>

		<ul id="menu" class="menu">
			<li class="menu-btnMenu_close">
				<a href="#" class="btnMenu btnMenu_close">
					<span class="btn-line"></span>
					<span class="btn-line"></span>
					<span class="btn-line"></span>
				</a>
			</li>
			<li class="menu-item">
				<a href="" class="menu-item-action">Home</a>
			</li>
			<li class="menu-item">
				<a href="" class="menu-item-action">Sobre</a>
			</li>
			<li class="menu-item">
				<a href="" class="menu-item-action">Como utilizar</a>
			</li>
			<li class="menu-item">
				<a href="" class="menu-item-action">Mobile</a>
			</li>
			<li class="menu-item">
				<a href="" class="menu-item-action">Contato</a>
			</li>
			<li class="menu-item completar">

			</li>
		</ul>
	</nav>


	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<script src="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/btnMenu.js"></script>
</body>
</html>