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
    if($_POST){
      if(isset($_POST['title']) && isset($_POST['image']) && isset($_POST['text-news'])){
        $title = $_POST['title'];
        $image_url = "../media/news/" . $_POST['image'];
        $text = mysqli_real_escape_string($_POST['text-news']);
        $date = date('Y-m-d');
        $query = "INSERT INTO `news_page` (title, image, text, active, date) VALUES ('$title', '$image_url', '$text', '1', '$date')";
        if (mysqli_query($connection, $query)) {
          header("Location: adminpage.php");
          } else {
                $msg = "Новость не опубликована " . $query . "<br>" . mysqli_error($connection);
          }
      }
    }
   ?>
  <div class="padding-top">
  </div>
	<div class="wrapper">
    <div class="admin-page-top">
      <h3>Добро пожаловать! <?php echo $_SESSION['username'] ?></h3>
      <p>Добавление новости</p>
    </div>
      <div class="add-container">
        <div class="add-form">
          <form class="" action="/mediacenter/pages/news_add_page.php" method="post">
            <label for="title">Заголовок статьи:</label>
            <input type="text" name="title" value="" placeholder="Заголовок статьи">
            <label for="image">Картинка статьи (бета версия пишите название картинки):</label>
            <input type="text" name="image" value="" placeholder="Название картинки">
            <label for="text-news">Текст(бета версия, можете испрльзовать html теги для стилизации):</label>
            <textarea name="text-news" placeholder="Текст новости"></textarea>
            <a href="#verification" class="button">Опубликовать</a>
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
                     <input type="submit" name="" href="" value="Опубликовать" class="modal-button-vvod">
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
<script src="../static/scripts/slider.js"></script>
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
