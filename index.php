<?php
	include "config.php"
 ?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $config['title'] ?></title>
	<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="static/style/style.css">
</head>
<header>
<?php
	include "header.php"
 ?>
 <div class="padding-top">
 </div>
 <div class="wrapper">
	 <div class="img-block">
		 <h1>Мы ловим моменты</h1>
		 <div class="img-block-img">
		 </div>
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
	       <div class="img-text"><img src="static/images/insta.png" alt="disign" width="150px" height="150px"><p>Работы дизайнеров</p></div>
				 <div class="img-text">
					 <a href="pages/news.php"><img src="static/images/safari.png" alt="news" width="150px" height="150px"><p>Новости</p></a></div>
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
		<div class="feedback" id="feedback-form-href">
			<div class="feedback-text">
				<h3>Свяжитесь с нами</h3>
				<p>Мы всегда рады вам!</p>
			</div>
			<div class="feedback-content">
				<div class="feedback-content-left">
					<form action="#feedback-form" class="feedback-form" id="feedback-form">
						<input type="text" name="name" class="feedback-input" placeholder="Ваше имя">
						<input type="email" name="email" class="feedback-input" placeholder="Ваш e-mail"><br>
						<textarea class="feedback-input-area" name="text" placeholder="Ваше сообщение"></textarea>
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
<?php
	if($_POST){
		if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$text = $_POST['text'];
			$name = htmlspecialchars($name);
			$email = htmlspecialchars($email);
			$text = htmlspecialchars($text);
			$name = urldecode($name);
			$email = urldecode($email);
			$text = urldecode($text);
			$name = trim($name);
			$email = trim($email);
			$text = trim($text);
			//echo $fio;
			//echo "<br>";
			//echo $email;
			if (mail("skryabinmitya@mail.ru", "Заявка с сайта", "Имя:".$name.". E-mail: ".$email . "Текст" . $text ,"From: example2@mail.ru \r\n")){
	    	echo "сообщение успешно отправлено";
			} else {
			    echo "при отправке сообщения возникли ошибки";
			}
	}
}
 ?>
 <?php
	include "footer.php";
  ?>
</html>
