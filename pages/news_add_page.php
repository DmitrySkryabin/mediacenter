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
      if(isset($_POST['title']) && isset($_POST['text-news'])){
        $title = base64_encode($_POST['title']);
        $text = base64_encode($_POST['text-news']);
        $date = date('Y-m-d');
        if(isset($_FILES['image'])){
          $errors = array();
          $file_name = $_FILES['image']['name'];
          $file_size = $_FILES['image']['size'];
          $file_tmp = $_FILES['image']['tmp_name'];
          $file_type = $_FILES['image']['type'];
          move_uploaded_file($file_tmp, "../media/news/". $file_name);
        }
        $image_url = "../media/news/" . $file_name;
        $query = "INSERT INTO `news_page` (title, image, text, active, date) VALUES ('$title', '$image_url', '$text', '1', '$date')";
        if (mysqli_query($connection, $query)) {
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
      <p>Добавление новости</p>
    </div>
      <div class="add-container">
        <div class="add-form">
          <form class="" action="/mediacenter/pages/news_add_page.php" method="post" enctype="multipart/form-data">
            <label for="title">Заголовок статьи:</label>
            <input type="text" name="title" value="" placeholder="Заголовок статьи" class="text-title-before">
            <label for="image">Картинка статьи:</label>
            <input type="file" name="image" value="" class="" placeholder="Название картинки">
            <label for="text-news">Текст(бета версия, можете испрльзовать html теги для стилизации):</label>
            <textarea name="text-news" placeholder="Текст новости" class="text-text-before"></textarea>
            <a href="#verification" class="button">Опубликовать</a>
            <a href="#beforepost" class="button" onclick="modal()">Предпросмотр</a>
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
            <div id="beforepost" class="modalbackground">
          		<div class="modalwindow modalwindow-beforepost">
          			<div class="modal-top modal-top-beforepost">
          				<h3>Предпросмотр</h3>
          				<a href="" class="modal-button modal-button-beforepost">&#215;</a>
          			</div>
          			<div class="modal-form modal-form-beforepost">
                  <div class="news-article-title-page">
                   <a href="">Назад</a>
                   <h4 class="modal-article-beforepost"></h4>
                 </div>
                 <figure class="news-article-image-page">
                   <img src="" alt="" class="news-article-image-image">
                 </figure>
                 <div class="news-article-text">
                   <p class="modal-text-beforepost"></p>
                 </div>
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
 <script>
   function modal(){
     console.log("lol");
     $(".modal-article-beforepost").text($(".text-title-before").val())
     $(".modal-text-beforepost").text($(".text-text-before").val())
   }
 </script>
