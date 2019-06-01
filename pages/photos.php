<?php
	include "../config.php"
 ?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $config['title'] ?></title>
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
	<link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<link rel="stylesheet" href="../static/style/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
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

		<div class="photos">
			<?php
				$i=1;
				$j=1;
			?>
			<div class="fotorama">
				<?php
					while ($i<8){
						$img = "<img class=\"mySlides\" src=\"../media/photos/{$i}.jpg\" style=\"width:100%\">";
						echo $img;
						$i++;
					};
				?>
			</div>
				<!--<div class="w3-content" style="max-width:800px">
				</div>
				<div class="w3-center">
				  <div class="w3-section">
				    <button class="w3-button" onclick="plusDivs(-1)">Предыдущая</button>
				    <button class="w3-button" onclick="plusDivs(1)">Следующая</button>
				  </div>
				  <div class="w3-buton-section">
				  </div>
				</div>-->
		</div>
		<div class="meating">
			<h3>Знакомство</h3>
			<div class="meating-text">
        <h4> Фото группа</h4>
        <p>Ловцы лучших моментов нашего студенчества, через их глаза
				и руки проходят тысячи фотографии ежемесячно.</p>
        <p>Фотографии этих ребят вы видите везде.</p>
      </div>
		</div>
		<div class="about-us-pages">
			<div class="about-container-pages">
				<div class="about-container-pages-top">
					<div class="about-info about-info-pages">
						<div class="about-photo"><img src="../media/photos/lena.jpg" alt="" height="200px" width="200px"></div>
						<div class="about-text-pages">
							<h4>Еремисова Лена</h4>
							<p>Руководитель фото группы</p>
						</div>
					</div>
				</div>
				<div class="about-container-pages-bottom">
					<div class="about-info about-info-pages">
					<div class="about-photo"><img src="../media/photos/vlad.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Лихоманов Владислав</h4>
					</div>
				</div>
				<div class="about-info about-info-pages">
					<div class="about-photo"><img src="../media/photos/erel.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text-pages">
						<h4>Никитин Эрэл Бэргэн</h4>
					</div>
				</div>
				<div class="about-info about-info-pages">
					<div class="about-photo"><img src="../media/photos/masha.jpg" alt="" height="200px" width="200px"></div>
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
<?php
 include "../footer.php";
 ?>
<script src="../static/scripts/slider.js"></script>
</html>
