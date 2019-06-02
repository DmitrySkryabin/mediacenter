<?php
  include "../config.php";
  if(isset($_SESSION['username'])){
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
    <div class="admin-page-top">
      <h3>Добро пожаловать! <?php echo $_SESSION['username'] ?></h3>
      <a href="news_add_page.php">Добавить новость</a>
    </div>
    <div class="admin-body">
      <?php
        $news_article = mysqli_query($connection,"SELECT * FROM `news_page` ORDER BY -`date`");
        $i=1;
       ?>
       <div class="admin-table">
         <table>
           <caption>Список новостей</caption>
           <tr>
             <th style="width: 4%;">
               <div class="admin-table-delete">
                 <div class="admin-table-delete-checkbox" onmouseover="mousechange()" onmouseout="mousenotchange()">
                 <input type="checkbox" name="" value="" class="all">
                 </div>
                 <div class="admin-table-delete-url" onmouseover="mousechange()" onmouseout="mousenotchange()">
                   <a href="#delete_verification" onclick="modalcheckboxes()">Удалить</a>
                 </div>
               </div>
              </th>
             <th style="width: 4%;">№</th>
             <th style="width: 55%;">Заголовок</th>
             <th style="width: 8%;">Дата публикации</th>
             <th style="width: 7%;">Показы</th>
             <th style="width: 5%;">Видимость</th>
             <th style="width: 10%;"></th>
           </tr>
       <?php
          while($news = mysqli_fetch_assoc($news_article))
          {
            ?>
            <tr>
              <td> <input type="checkbox" id="<?php echo $news['id']; ?>" class="one"> </td>
              <td><?php echo $i; ?></td>
              <td> <a href="#" class="a-tr"> <?php echo base64_decode($news['title']); ?> </a></td>
              <td><?php  echo $news['date'];?></td>
              <td><?php  echo $news['views'];?></td>
              <td><?php  if($news['active']==1) {echo "Да";}else{echo "Нет";}?></td>
              <td> <a href="#delete_verification" class="button btn-click" id="<?php echo $news['id']; ?>" onclick="modal(this.id)">Удалить</a> </td>
            </tr>
          <?php
            $i++;
              }
           ?>
           </table>
             <div id="delete_verification" name="modalverify" class="modalbackground">
             <div class="modalwindow">
               <div class="modal-top modal-top-verification">
                 <h3>Подтвержение</h3>
                 <a href="" class="modal-button modal-button-verification">&#215;</a>
               </div>
               <div class="modal-form modal-form-verification" style="display: flex; flex-direction: column; height: 270px;">
                    <p>Вы действительно хотите <strong>удалить</strong> данную новость, после удаления
                      <strong>данные не смогут быть востановлены</strong>. Рекомендуется просто <strong>скрыть</strong> данную новость,
                      она не будет видна обычным читателям, но сохранится в базе данных</p>
                      <form class="" action="delete_object.php" method="post">
                        <input type="text" name="id-of-news" id="id-of-news" value="" style="display: none;">
                        <input type="submit" name="delete" value="Удалить"  class="modal-button-vvod">
                        <input type="submit" name="close" value="Скрыть" class="modal-button-vvod" style="margin-top: 5px;">
                      </form>
               </div>
             </div>
           </div>
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
   function modal(id){
     var a = id+"?&";
     $("#id-of-news").val(a);
   }
   $(".all").on("change", function(){
     $(".one:checkbox").prop("checked", this.checked);
   });
   $(".one").on("change", function(){
     if($(".one:checkbox:not(:checked)").length == 0){
       $(".all").prop("checked", true);
     }
     else{
       $(".all").prop("checked", false);
     }
   });
   function modalcheckboxes(){
     data=[];
     var a ="";
     $(".one:checkbox:checked").each(function(){
       data.push($(this).attr("id"));
     });
     data.forEach(function(entry) {
       a = a + entry + "?";
     });
     a = a + "&";
     $("#id-of-news").val(a);
   }
 </script>
