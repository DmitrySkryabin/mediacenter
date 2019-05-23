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
    <div class="news-top">
      <h3>НОВОСТИ</h3>
    </div>
    <div class="news-body">
      <?php
        $news_article = mysqli_query($connection,"SELECT * FROM `news_page` WHERE `active`=1 ORDER BY -`date`");
       ?>
       <?php
          while($news = mysqli_fetch_assoc($news_article))
          {
            ?>
          <div class="news-article">
            <figure class="news-article-image">
              <img src="<?php echo $news['image']; ?>" alt="" class="news-article-image-image">
            </figure>
            <div class="news-article-title">
              <h4><?php echo $news['title']; ?></h4>
            </div>
            <div class="news-article-text">
                <p><?php echo mb_substr($news['text'], 0, 400, 'utf-8'); ?>...</p>
            </div>
            <div class="news-article-footer">
              <p>Опубликовано: <span><?php echo $news['date']; ?></span> </p>
              <p>Просмотров: <span><?php echo $news['views']; ?></span> </p>
              <a href="news_page.php?id=<?php echo $news['id'] ?>&next=news.php">Читать далее</a>
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
