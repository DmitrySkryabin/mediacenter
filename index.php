<?php
	include "config.php"
 ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $config['title'] ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link rel="stylesheet" href="static/style/style.css">
</head>
<header>
<?php
	include "header.php"
 ?>
 <div class="wrapper">
	 <div class="img-block">
			<h1>Мы ловим моменты</h1>
		</div>
 </div>
</header>
<body>
	<div class="wrapper">
		<?php
			include "header_bottom.php"
		 ?>
		 <div class="portfolio-bottom">
	     <div class="img-container">
	       <div class="img-text"><img src="static/images/foto.png" alt="foto" width="150px" height="150px"><p>Наши фотографии</p></div>
	       <div class="img-text"><img src="static/images/music.png" alt="works" width="150px" height="150px"><p>Наши видео работы</p></div>
	       <div class="img-text"><img src="static/images/safari.png" alt="news" width="150px" height="150px"><p>Новости нашей деятельности</p></div>
	       <div class="img-text"><img src="static/images/insta.png" alt="disign" width="150px" height="150px"><p>Работы дизайнеров</p></div>
	     </div>
	   </div>
		<div class="about-us">
			<h3>О нас</h3>
			<div class="about-container">
				<div class="about-info">
					<div class="about-photo"><img src="media/main/arina.jpg" alt="" height="200px" width="200px"></div>
					<div class="about-text">
						<h4>Старцева Арина <br>Алексеевна</h4>
						<p>Руководитель Медиа центра</p>
					</div>
				</div>
				<div class="about-info-right">
					<div class="about-info-right-text">
						<p>Медиа центр-это структурное подразделение профсоюзной первичной организации студентов Северо-Восточного Федерального университета им.М.К.Аммосова</p><br>
						<p>Медиа центр-это творческая вспышка. Это фотографы,видеографы,корреспонденты и дизайнеры. Те люди, которые всегда находятся за кадром, чтобы кадр получился отлично.
						</p><br>
						<p>В нас течет творчество,креатив и вдохновение. И мы бы хотели поделиться им с вами.</p>
					</div>
				</div>
			</div>
			<div class="about-footer">
				<div class="about-footer-img">
					<img src="static/images/logo_down.png" alt="mediacenter" height="180px" width="180px">
				</div>
			</div>
		</div>
		<div class="feedback">
			<div class="feedback-text">
				<h3>Свяжитесь с нами</h3>
				<p>Мы всегда рады вам!</p>
			</div>
			<div class="feedback-content">
				<div class="feedback-content-left">
					<form action="" class="feedback-form">
						<input type="text" class="feedback-input" placeholder="   Ваше имя">
						<input type="email" class="feedback-input" placeholder="   Ваш e-mail"><br>
						<textarea class="feedback-input-area" placeholder="Ваше сообщение"></textarea>
						<br>
						<input type="submit" class="feedback-input-submit">
					</form>
				</div>
				<div class="feedback-content-right">
					<p>Информация <br><br> Наш адрес: <br> Каландрашвили 17, блок B <br>Коворкинг-центр</p>
					<div class="feedback-addreses">
						<p>Факс:   89275456737<br>E-mail:      ppossvfu@gmail.com</p>
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
</html>
