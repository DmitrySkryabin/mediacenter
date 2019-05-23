<?php
	include "../config.php"
 ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $config['title'] ?></title>
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="../static/style/style.css">
</head>

<header>
	<?php
	include "../header.php"
	 ?>
</header>
<body>
	<div class="padding-top">
	</div>
	<div class="wrapper">
		<?php
			include "../header_bottom.php"
		 ?>
		<div class="design">
      <div class="design-photos">
			     <img src="../media/design/1.PNG" alt="design" height="650px" width="650px;">
      </div>
		</div>
		<div class="meating">
			<h3>Знакомство</h3>
      <div class="meating-text">
        <h4> Дизайн группа</h4>
        <p>Это те люди, благодаря которым у всех конкурсов, мероприятии, новостей,
				благодарственных и пр., мощное оформление. </p>
        <p>Они настоящие художники</p>
      </div>
		</div>
		<div class="about-us-pages">
			<div class="about-container-pages">
				<div class="about-container-pages-top">
					<div class="about-info">
						<div class="about-photo"><img src="../media/design/kunnay.png" alt="" height="200px" width="200px"></div>
						<div class="about-text-pages">
							<h4>Копырина Кюннэй</h4>
							<p>Руководитель дизайн группы</p>
						</div>
					</div>
				</div>
				<div class="about-container-pages-bottom">
					<div class="about-info">
					<div class="about-photo"><img src="../media/design/petr.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Петров Петр</h4>
					</div>
				</div>
				<div class="about-info">
					<div class="about-photo"><img src="../media/design/kirill.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Иванов Кирилл</h4>
					</div>
				</div>
				<div class="about-info">
					<div class="about-photo"><img src="../media/design/dulustan.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Дьулусан Дьулустанов</h4>
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
