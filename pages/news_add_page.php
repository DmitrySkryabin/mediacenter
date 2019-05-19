<?php
  include "../config.php";
  if(isset($_SESSION['username'])){
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
  <div class="padding-top">
  </div>
	<div class="wrapper">
    <div class="admin-page-top">
      <h3>Добро пожаловать! <?php echo $_SESSION['username'] ?></h3>
      <p>Добавление новости</p>
    </div>
      <form class="" action="" method="post">
        <label for="title">Заголовок статьи</label>
        <input type="text" name="title" value="" placeholder="Заголовок статьи">
        <label for="image">Картинка статьи (бета версия пишите название картинки)</label>
        <input type="text" name="image" value="" placeholder="Название картинки">
        <label for="text-news">Текст(бета версия, можете испрльзовать html теги для стилизации)</label>
        <textarea name="text-news" placeholder="Текст новости"></textarea>
        <input type="submit" name="" value="отправить">
      </form>
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
<script src="../static/scripts/slider.js"></script>
</html>
<?php
  if($_POST){
    if(isset($_POST['title']) && isset($_POST['image']) && isset($_POST['text-news'])){
      $title = $_POST['title'];
      $image_url = "../media/news/" . $_POST['image'];
      $text = $_POST['text-news'];
      $query = "INSERT INTO `news_page` (title, image, text) VALUES ('$title', '$image_url', '$text')";
      if (mysqli_query($connection, $query)) {
        echo "Новость добавалена";
        } else {
              echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }
    }
  }
  }
  else{
    ?><link rel="stylesheet" href="../static/style/style.css">
    <?php
        header('HTTP/1.0 403 Forbidden');
        include "../permission_denied.php";
  }
 ?>
