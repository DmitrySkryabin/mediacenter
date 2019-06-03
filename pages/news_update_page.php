<?php
  include "../config.php";
  if(isset($_SESSION['username'])){
    $msg="";
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
  <?php
    if(isset($_POST)){
      if(isset($_POST['title']) && isset($_POST['image']) && isset($_POST['text-news'])){
        $title = base64_encode($_POST['title']);
        $image_url = $_POST['image'];
        $text = base64_encode($_POST['text-news']);
        $date = date('Y-m-d');
        $query = "UPDATE `news_page` SET `title`=\"$title\",`image`=\"$image_url\",`text`=\"$text\" WHERE `id`=" . (int)$_GET['id'];
        if (mysqli_query($connection, $query)) {
          $fd = fopen("../result.log", 'w') or die("не удалось создать файл");
          fwrite($fd, $query);
          fclose($fd);
          header("Location: adminpage.php");
          } else {
                $msg = "Ошибка сохраниения в запросе:" . $query . "\n" . mysqli_error($connection);
                $fd = fopen("../errors.log", 'w') or die("не удалось создать файл");
                fseek($fd, 0, SEEK_END);
                fwrite($fd, $msg);
                fclose($fd);
          }
      }
    }
   ?>
  <div class="padding-top">
  </div>
	<div class="wrapper">
    <div class="admin-page-top">
      <h3>Добро пожаловать! <?php echo $_SESSION['username'] ?></h3>
      <p>Редактирование новости</p>
    </div>
      <div class="add-container">
        <div class="add-form">
          <?php
            $news_article = mysqli_query($connection,"SELECT * FROM `news_page` WHERE `id` = " . (int)$_GET['id']);
            $news = mysqli_fetch_assoc($news_article);
           ?>
          <form class="" action="/mediacenter/pages/news_update_page.php?id=<?php echo $news['id'] ?>" method="post">
            <label for="title">Заголовок статьи:</label>
            <input type="text" name="title" value="<?php echo base64_decode($news['title']); ?>" placeholder="Заголовок статьи">
            <label for="image">Картинка статьи (бета версия пишите название картинки):</label>
            <input type="text" name="image" value="<?php echo $news['image']; ?>" placeholder="Название картинки">
            <label for="text-news">Текст(бета версия, можете испрльзовать html теги для стилизации):</label>
            <textarea name="text-news" placeholder="Текст новости"><?php echo nl2br(base64_decode($news['text'])); ?></textarea>
            <a href="#verification" class="button">Сохранить</a>
            <div id="verification" class="modalbackground">
          		<div class="modalwindow">
          			<div class="modal-top modal-top-verification">
          				<h3>Подтвержение</h3>
          				<a href="" class="modal-button modal-button-verification">&#215;</a>
          			</div>
          			<div class="modal-form modal-form-verification">
          			     <p>Проверьте <strong>правильность текста</strong>,
                     и если нужно <strong>исправьте</strong>, после того как новость будет
                     опуб-ликована, её могут увидеть некоторое число людей
                     прежде чем новость будет отредактиро-вана</p>
                     <input type="submit" name="" href="" value="Сохранить" class="modal-button-vvod">
          			</div>
          		</div>
          	</div>
          </form>
        </div>
      </div>
  </div>
</body>
<?php
 include "../footer.php";
 ?>
</html>
<?php
  }
  else{
    ?><link rel="stylesheet" href="../static/style/style.css">
    <?php
        header('HTTP/1.0 403 Forbidden');
        include "../permission_denied.php";
  }
 ?>
