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
					<div class="about-info about-info-pages">
						<div class="about-info-pages-l">
							<div class="about-photo"><img src="../media/press/galya.jpg" alt="" height="200px" width="200px"></div>
							<div class="about-text-pages">
								<h4>Бурцева галина</h4>
								<p>Руководитель пресс группы</p>
							</div>
						</div>
						<div class="about-info-pages-r">
							<div class="about-info-pages-r-content">
								<p>Отличный кореспондент</p>
								<p>Знает как правильно довести информацию</p>
								<p> <i class="fa fa-whatsapp"></i> +79241772875 </p>
							</div>
						</div>
					</div>
				</div>
				<div class="about-container-pages-bottom">
					<div class="about-info about-info-pages">
						<div class="about-info-pages-l">
							<div class="about-photo"><img src="../media/press/mira.jpg" alt="" height="200px" width="200px"></div>
							<div class="about-text-pages">
								<h4>Иванова Любомира</h4>
							</div>
						</div>
						<div class="about-info-pages-r">
							<div class="about-info-pages-r-content">
								content
							</div>
						</div>
					</div>
				<div class="about-info about-info-pages">
					<div class="about-info-pages-l">
						<div class="about-photo"><img src="../media/press/tonya.jpg" alt="" height="200px" width="200px"></div>
						<div class="about-text-pages">
							<h4>Необутова Антонина</h4>
						</div>
					</div>
					<div class="about-info-pages-r">
						<div class="about-info-pages-r-content">
							content
						</div>
					</div>
				</div>
				<div class="about-info about-info-pages">
					<div class="about-info-pages-l">
						<div class="about-photo"><img src="../media/press/ruslan.jpg" alt="" height="200px" width="200px"></div>
						<div class="about-text-pages">
							<h4>Терентьев Руслан</h4>
						</div>
					</div>
					<div class="about-info-pages-r">
						<div class="about-info-pages-r-content">
							content
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>

		</div>
	</div>
</body>
<?php
 include "../footer.php";
 ?>
<script src="../scripts/slider.js"></script>
</html>
