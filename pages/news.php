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
      <div class="news-body-left">
				<?php
					 while($news = mysqli_fetch_assoc($news_article))
					 {
						 ?>
					 <div class="news-article" id="<?php echo $news['id']; ?>">
						 <figure class="news-article-image">
							 <img src="<?php echo $news['image']; ?>" alt="" class="news-article-image-image">
						 </figure>
						 <div class="news-article-title">
							 <h4><?php echo $news['title']; ?></h4>
						 </div>
						 <div class="news-article-text">
								 <p><?php echo mb_substr($news['text'], 0, 300, 'utf-8'); ?>...</p>
						 </div>
						 <div class="news-article-footer">
							 <div class="news-article-footer-l">
								 <p>Опубликовано: <span><?php echo $news['date']; ?></span> </p>
								 <p>Просмотров: <span><?php echo $news['views']; ?></span> </p>
							 </div>
							 <div class="news-article-footer-r">
								 <a href="news_page.php?id=<?php echo $news['id'] ?>&next=news.php&nextid=<?php echo $news['id']?>">Читать далее</a>
							 </div>
						 </div>
					 </div>
					 <?php
							 }
						?>
      </div>
			<div class="news-body-right">
				<?php
					$news_article_right = mysqli_query($connection,"SELECT * FROM `news_page` WHERE `active`=1 ORDER BY -`views` LIMIT 5");
					while($news_right = mysqli_fetch_assoc($news_article_right)){
				 ?>
				 <div class="news-article-right" id="<?php echo $news_right['id']; ?>-right">
					 <figure class="news-article-image-right">
						 <img src="<?php echo $news_right['image']; ?>" alt="" class="news-article-image-image-right">
					 </figure>
					 <div class="news-article-title-right">
						 <h4><?php echo $news_right['title']; ?></h4>
					 </div>
					 <div class="news-article-text-right">
							 <p><?php echo mb_substr($news_right['text'], 0, 100, 'utf-8'); ?>...</p>
					 </div>
					 <div class="news-article-footer-right">
						 <div class="news-article-footer-l-right">
							 <p><i class="fa fa-calendar fa-1x news-color" aria-hidden="true"></i>  <span>  <?php echo $news_right['date']; ?></span> </p>
							 <p><i class="fa fa-eye fa-1x news-color" aria-hidden="true"></i>  <span><?php echo $news_right['views']; ?></span> </p>
						 </div>
						 <div class="news-article-footer-r-right">
							 <a href="news_page.php?id=<?php echo $news_right['id'] ?>&next=news.php&nextid=<?php echo $news['id']?>">Читать далее</a>
						 </div>
					 </div>
				 </div>
				 <?php
			 		}
				  ?>
			</div>
    </div>
  </div>
	<?php
 	include "../footer.php";
   ?>
<script src="../static/scripts/slider.js"></script>
</html>
