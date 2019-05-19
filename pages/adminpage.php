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
      <a href="news_add_page.php">Добавить новость</a>
    </div>
    <div class="news-body">
      <?php
        $news_article = mysqli_query($connection,"SELECT * FROM `news_page` ORDER BY -`date`");
        $i=1;
       ?>
       <div class="admin-table">
         <table>
           <caption>Список новостей</caption>
           <tr>
             <th>
               <div class="admin-table-delete">
                 <div class="admin-table-delete-checkbox" onmouseover="mousechange()" onmouseout="mousenotchange()">
                 <input type="checkbox" name="" value="" class="all">
                 </div>
                 <div class="admin-table-delete-url" onmouseover="mousechange()" onmouseout="mousenotchange()">
                   <a href="#">Удалить</a>
                 </div>
               </div>
              </th>
             <th style="width: 5%;">№</th>
             <th style="width: 60%;">Заголовок</th>
             <th style="width: 10%;">Дата публикации</th>
             <th style="width: 10%;">Показы</th>
             <th style="width: 10%;"></th>
           </tr>
       <?php
          while($news = mysqli_fetch_assoc($news_article))
          {
            ?>
            <tr>
              <td> <input type="checkbox" name="" value="" class="one"> </td>
              <td><?php echo $i; ?></td>
              <td> <a href="#" class="a-tr"> <?php  echo $news['title']?> </a></td>
              <td><?php  echo $news['date']?></td>
              <td><?php  echo $news['views']?></td>
              <td> <a href="#" class="button">Удалить</a> </td>
            </tr>
          <?php
            $i++;
              }
           ?>
           </table>
        </div>
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
</body>
</footer>
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
 <script>
   function mousechange(){
     query = document.querySelector(".admin-table-delete-url");
     query.style.display = "block";
     query = document.querySelector(".admin-table-delete-checkbox");
     query.style.background = "#1bbc9b";
     query.style.paddingLeft = "12px";
   }
   function mousenotchange(){
     query = document.querySelector(".admin-table-delete-url");
     query.style.display = "none";
     query = document.querySelector(".admin-table-delete-checkbox");
     query.style.background = "#D4D4D4";
     query.style.paddingLeft = "16px";
   }
 </script>