<?php
	include "../config.php";
  mysqli_query($connection, "UPDATE `news_page` SET `views` = `views` + 1 WHERE `id`=" . (int)$_GET['id']);
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
	 <div class="progress-bar-line">

	 </div>
</header>
<body>
  <div class="padding-top">
  </div>
	<div class="wrapper">
    <div class="news-body-page">
			<div class="news-body-page-left">
				<div class="theiaStickySidebar">
					<div class="news-article-page-main">
						<?php
						if(isset($_POST['comment'])){
							$comment = $_POST['comment'];
							$query = "SELECT `id` FROM `users` WHERE `username`=\"".$_SESSION['username']."\"";
							$user = mysqli_fetch_assoc(mysqli_query($connection, $query));
							$user_id = $user['id'];
							$date = date('Y-m-d');
							$post_id = $_GET['id'];
							$child = 1;
							$query = "INSERT INTO `comments` (`id`, `comment`, `user`, `date`, `child`, `post_id`) VALUES (NULL, '$comment', '$user_id', '$date', '$child', '$post_id')";
							if(mysqli_query($connection, $query)){
							}else{
								$msg = "Ошибка сохраниения в запросе:" . $query . "\n" . mysqli_error($connection);
								echo $msg;
							}
						}
			        $news_article = mysqli_query($connection,"SELECT * FROM `news_page` WHERE `id` = " . (int)$_GET['id']);
							$news = mysqli_fetch_assoc($news_article);
			       ?>
			          <div class="news-article-page">
			            <div class="news-article-title-page">
			              <a href="<?php echo $_GET['next'];?>#<?php echo $_GET['nextid']; ?>">Назад</a>
			              <h4><?php echo nl2br(base64_decode($news['title'])); ?></h4>
			            </div>
			            <figure class="news-article-image-page">
			              <img src="<?php echo $news['image']; ?>" alt="" class="news-article-image-image">
			            </figure>
			            <div class="news-article-text">
			              <p><?php echo nl2br(base64_decode($news['text'])); ?></p>
			            </div>
			          </div>
								<div class="comment">
									<div class="comment-content">
										<h4>Комментарии</h4>
										<?php
											if (isset($_SESSION['username'])){
											?>
											<form class="" action="#addcommment" method="post" id="addcommment">
												<textarea name="comment" rows="8" cols="80" class="comment-input-area"></textarea>
												<input type="submit" name="" value="Добавить комментарий" class="comment-submit">
											</form>
											<?php
										}else{ ?>
											<p>Для того чтобы оставить комментарий нужно авторизоваться</p>
											<?php
											}
											 ?>

										<?php
											$query = "SELECT * FROM `comments` INNER JOIN `users` ON `comments`.`user`=`users`.`id` WHERE `post_id`=" . $news['id'];
											$comments = mysqli_query($connection, $query);
											while($comment = mysqli_fetch_assoc($comments)){
												?>
												<div class="comment-article">
													<h5><?php echo $comment['username'] ?></h5>
													<p><?php echo $comment['comment'] ?></p>
													<p>Дата: <?php echo $comment['date'] ?></p>
												</div>
												<?php
											}
										 ?>
									</div>
								</div>
      		</div>
      	</div>
      </div>
			<div class="news-body-page-right">
				<div class="theiaStickySidebar">
					<div class="news-body-right-sidebar-page">
						<div class="news-article-footer-page">
							<p><i class="fa fa-calendar fa-1x news-color" aria-hidden="true"></i>  <span><?php echo $news['date']; ?></span> </p>
							<p><i class="fa fa-eye fa-1x news-color" aria-hidden="true"></i>  <span><?php echo $news['views']; ?></span> </p>
						</div>
						<h4>Авторы текста;</h4>
						<p>Илья Казаков</p> <p> Валентин Петухов</p><p>Наталья Шелягина</p><p>Дмитрий Скрябин</p><p>Дана Рюй</p>
						<div class="repost-div">
							<h4>Поделись материалом  <i class="fa fa-envelope fa-1x icon-color" ></i></h4>
							<div class="repost">
								<a href="https://vk.com/ppossvfu" target="_blank"><i class="fa fa-vk fa-2x" aria-hidden="true"></i></a>
			         	<a href="https://twitter.com/PPOSSVFU" target="_blank" ><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
			          <a href="https://www.youtube.com/channel/UCH7SYqZYWmAjuQdsi-vTOYQ" target="_blank"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a>
								<a href="https://twitter.com/PPOSSVFU" target="_blank" ><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a
							</div>
						</div>
					</div>
				</div>
			</div>
    </div>
  </div>
	<?php
 	include "../footer.php";
   ?>
	 <script src="/mediacenter/static/scripts/theia-stycky-sidebar.min.js">
	 </script>
	 <script>
	 jQuery(document).ready(function() {
	 jQuery('.news-body-page-left, .news-body-page-right').theiaStickySidebar({
	 				// Настройки
	 				additionalMarginTop: 60
	 		});
	  });
		$(window).scroll(function(){
			let per = $(this).scrollTop()/($(".news-article-page").height())*100;
			$(".progress-bar-line").prop("style").width=per+"%";
		});
	 </script>
</html>
