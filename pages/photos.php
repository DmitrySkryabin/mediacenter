<?php
	include "../config.php"
 ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $config['title'] ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="../static/style/style.css">
</head>

<header>
	<?php
	include "../header.php"
	 ?>
</header>
<body>
	<div class="wrapper">
		<?php
			include "../header_bottom.php"
		 ?>
		<div class="photos">
			<div class="w3-content" style="max-width:800px">
			  <img class="mySlides" src="1.jpg" style="width:100%">
			  <img class="mySlides" src="2.jpg" style="width:100%">
			  <img class="mySlides" src="3.jpg" style="width:100%">
			  <img class="mySlides" src="4.jpg" style="width:100%">
			  <img class="mySlides" src="5.jpg" style="width:100%">
			  <img class="mySlides" src="6.jpg" style="width:100%">
			  <img class="mySlides" src="7.jpg" style="width:100%">
			</div>

			<div class="w3-center">
			  <div class="w3-section">
			    <button class="w3-button" onclick="plusDivs(-1)">Предыдущая</button>
			    <button class="w3-button" onclick="plusDivs(1)">Следующая</button>
			  </div>
			  <div class="w3-buton-section">
			  	  <button class="w3-button demo" onclick="currentDiv(1)">1</button>
				  <button class="w3-button demo" onclick="currentDiv(2)">2</button>
				  <button class="w3-button demo" onclick="currentDiv(3)">3</button>
				  <button class="w3-button demo" onclick="currentDiv(4)">4</button>
				  <button class="w3-button demo" onclick="currentDiv(5)">5</button>
				  <button class="w3-button demo" onclick="currentDiv(6)">6</button>
				  <button class="w3-button demo" onclick="currentDiv(7)">7</button>
			  </div>
			</div>
		</div>
		<div class="meating">
			<h3>Знакомство</h3>
		</div>
		<div class="about-us-pages">
			<div class="about-container-pages">
				<div class="about-container-pages-top">
					<div class="about-info">
						<div class="about-photo"><img src="lena.jpg" alt="" height="200px" width="200px"></div>
						<div class="about-text-pages">
							<h4>Еремисова Лена</h4>
							<p>Руководитель фото группы</p>
						</div>
					</div>
				</div>
				<div class="about-container-pages-bottom">
					<div class="about-info">
					<div class="about-photo"><img src="vlad.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Лихоманов Владислав</h4>
					</div>
				</div>
				<div class="about-info">
					<div class="about-photo"><img src="erel.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Никитин Эрэл Бэргэн</h4>
					</div>
				</div>
				<div class="about-info">
					<div class="about-photo"><img src="masha.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Капитонова Мария</h4>
					</div>
				</div>
				</div>
			</div>
		</div>

		</div>
	</div>
</body>
<footer>
	<div class="wrapper">
		<div class="footer-content">
			<div class="footer-text">
				<p>2019</p>
			<p>@DanaRyui</p>
			</div>
			<div class="up-button">
				<a href="#">&#9650</a>
			</div>
		</div>
	</div>
</footer>
<script src="../scripts/slider.js"></script>
</html>
