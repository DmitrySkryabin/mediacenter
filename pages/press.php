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
		<div class="meating">
			<h3>Знакомство</h3>
      <div class="meating-text">
        <h4> Пресс группа</h4>
        <p>Новостные охотники, контролируют все
 	        наши социальные сети. </p>
        <p>Именно их текста вы читаете на каждом посте
          о прошедших мероприятиях.</p>
      </div>
		</div>
		<div class="about-us-pages">
			<div class="about-container-pages">
				<div class="about-container-pages-top">
					<div class="about-info">
						<div class="about-photo"><img src="../media/press/galya.jpg" alt="" height="200px" width="200px"></div>
						<div class="about-text-pages">
							<h4>Бурцева галина</h4>
							<p>Руководитель пресс группы</p>
						</div>
					</div>
				</div>
				<div class="about-container-pages-bottom">
					<div class="about-info">
					<div class="about-photo"><img src="../media/press/mira.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Иванова Любомира</h4>
					</div>
				</div>
				<div class="about-info">
					<div class="about-photo"><img src="../media/press/tonya.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Необутова Антонина</h4>
					</div>
				</div>
				<div class="about-info">
					<div class="about-photo"><img src="../media/press/ruslan.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Терентьев Руслан</h4>
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
