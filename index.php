<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once "sys/classes/lang.class.php";
?>
<!DOCTYPE html>
<html lang="ua">
<head>
	<meta charset="UTF-8">
	<title><?=$lang['SITE_NAME']?></title>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,800,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/vendor/normalize.css">
	<link rel="stylesheet" href="css/vendor/polyfill.object-fit.min.css">
	<link rel="stylesheet" href="font/font-awesome-4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">

	<script src="js/vendor/jquery-1.12.3.min.js"></script>
	<script src="js/vendor/scrollspy.js"></script>
	<script src="js/vendor/particles.min.js"></script>
	<script src="js/scroll.js"></script>
	<script src="js/scrollAppear.js"></script>
	<script src="js/particle.js"></script>

</head>
<body>
	<header>
		<nav>
			<div class="flex-container">
				<a href="#" class="menu-item" id="current-page"><?=$lang['MENU_HOME']?></a>
				<a href="#" class="menu-item"><?=$lang['MENU_ABOUT_US']?></a>
				<a href="#" class="menu-item"><?=$lang['MENU_NEWS']?></a>
				<a href="#main-activities" class="scrollTo menu-item" data-target="main-activities"><?=$lang['MENU_PORTFOLIO']?></a>
				<a href="#" class="menu-item"><?=$lang['MENU_CONTACT_US'] ?></a>

				<!-- FOR LANGUAGES -->
				<a href="?lang=ua" class="mg50 lang <?=$ua?>">ua</a>
				<a href="?lang=ru" class="lang <?=$ru?>">ru</a>
				<a href="?lang=en" class="lang <?=$en?>">eng</a>
			</div>
			<div id="menu-pointer"></div>
		</nav>
		<div class="banner" id="particles-js">
			<h1><?=$lang['PAGE_TITLE']?></h1>
			<div id="next-section" class="scrollTo" data-target="main-activities">
				<span><?=$lang['NEXT_BUTT']?></span>
				<i class="fa fa-angle-down fa-1x next-icon" aria-hidden="true"></i>
			</div>
		</div>

		<!-- Напрямки діяльності -->
		<section id="main-activities">
				<h2>Напрямки діяльності</h2>
				<div class="flex-container animatable moveUp">
					<div class="item">
						<div class="circ-icon my-icon icon-bootle"></div>
						<h3>Виробництво горілчаних виробів</h3>
						<p>Навіть сама чиста природна вода обов'язково повинна пройти декілька стадій спеціального очищення</p>
					</div>

					<div class="item">
						<div class="circ-icon my-icon icon-rack"></div>
						<h3>Переробка креветок</h3>
						<p>Лікеро-горілчані заводи зазвичай використовують 3 різновиди ректифікованого етилового спирту</p>
					</div>

					<div class="item">
						<div class="circ-icon my-icon icon-house"></div>
						<h3>Виробництво фруктових і овочевих соків</h3>
						<p>В якості фільтруючого матеріалу практично завжди застосовується кварцовий пісок. Процес відбувається під тиском стовпа</p>
					</div>

					<div class="item">
						<div class="circ-icon my-icon icon-vozuk"></div>
						<h3>Оптова торгівля напоями</h3>
						<p>Розливають готову горілку на автоматизованих лініях. На етапі розливу всі пляшки піддаються контролю.</p>
					</div>
				</div>

		</section>


	<script src="js/vendor/polyfill.object-fit.min.js"></script>
	<script>
		objectFit.polyfill({
			selector: 'img.bg',
			fittype: 'cover',
			disableCrossDomain: 'true'
		});
</script>

</body>
</html>