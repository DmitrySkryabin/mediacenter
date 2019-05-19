<?php
	include "../config.php";
  mysqli_query($connection, "UPDATE `news_page` SET `views` = `views` + 1 WHERE `id`=" . (int)$_GET['id']);
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
    <div class="news-body">
      <?php
        $news_article = mysqli_query($connection,"SELECT * FROM `news_page` WHERE `id` = " . (int)$_GET['id']);
       ?>
       <?php
          while($news = mysqli_fetch_assoc($news_article))
          {
            ?>
          <div class="news-article">
            <div class="news-article-title">
              <a href="<?php echo $_GET['next'] ?>">Назад</a>
              <h4><?php echo $news['title']; ?></h4>
            </div>
            <figure class="news-article-image-page">
              <img src="<?php echo $news['image']; ?>" alt="" class="news-article-image-image">
            </figure>
            <div class="news-article-text">
              <p><?php echo $news['text']; ?></p>
            </div>
            <div class="news-article-footer">
              <p>Опубликовано: <span><?php echo $news['date']; ?></span> </p>
              <p>Просмотров: <span><?php echo $news['views']; ?></span> </p>
            </div>
          </div>
          <?php
              }
           ?>
    </div>
  </div>
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
