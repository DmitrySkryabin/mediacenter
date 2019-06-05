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
      <h3>РАСПИСАНИЕ МЕРОПРИЯТИЙ</h3>
    </div>
    <div class="activity-body">
      <?php
				if(isset($_GET['page'])){
					$page = $_GET['page'];
				}else{
					$page = 1;
				}
				$news_on_page = 10;
				$start = ($page-1)*$news_on_page;
        if(isset($_GET['organizer'])){
          $organizer_id = $_GET['organizer'];
          $activity_article = mysqli_query($connection,"SELECT *, `activity`.`description` AS `description_activity` FROM `activity` INNER JOIN `organizer` ON `organizer`=`organizer`.`id` WHERE `organizer`.`id`=$organizer_id ORDER BY -`date` LIMIT $start,$news_on_page");
        }else{
          $activity_article = mysqli_query($connection,"SELECT *, `activity`.`description` AS `description_activity` FROM `activity` INNER JOIN `organizer` ON `organizer`=`organizer`.`id` ORDER BY -`date` LIMIT $start,$news_on_page");
        }
       ?>
       <div class="news-body-left">
         <div class="theiaStickySidebar">
           <div class="news-body-left-content">
                  <?php
                    //$activity_article = mysqli_query($connection,"SELECT *, `activity`.`description` AS `description_activity` FROM `activity` INNER JOIN `organizer` ON `organizer`=`organizer`.`id` ORDER BY -`date` LIMIT 10");
                    while($activity = mysqli_fetch_assoc($activity_article)){
                   ?>
                   <div class="activity-one">
                     <div class="activity-one-t">
                       <img src="<?php echo $activity['image'] ?>" alt="">
                       <div class="activity-one-t-text">
                         <h6><?php echo $activity['title'] ?></h6>
                         <p><?php echo $activity['description_activity'] ?></p>
                       </div>
                     </div>
                     <div class="activity-one-b">
                       <p><?php echo $activity['date'] ?></p>
                       <p>Организатор: <?php echo $activity['name'] ?></p>
                     </div>
                   </div>
                   <?php
                    }
                    ?>
           </div>
         </div>
       </div>
       <div class="news-body-right">
         <div class="theiaStickySidebar">
           <div class="news-body-right-sidebar">
             <h3>Организаторы</h3>
             <div class="activiry-body-right-scroll">
               <a href="activity.php">Все</a>
               <?php
                $activity_article_r = mysqli_query($connection,"SELECT `name`,`id` FROM `organizer`");
                while($activity_r = mysqli_fetch_assoc($activity_article_r)){
                ?>
                <a href="activity.php?organizer=<?php echo $activity_r['id']; ?>"><?php echo $activity_r['name']; ?></a>
                <?php
                  }
                 ?>
             </div>
           </div>
         </div>
       </div>
    </div>


		<div class="pagination">
			<?php
        if(isset($_GET['organizer'])){
          $query = "SELECT COUNT(*) as count FROM `activity` WHERE `organizer`=$organizer_id";
        }else{
          $query = "SELECT COUNT(*) as count FROM `activity`";
        }
				$result = mysqli_query($connection, $query);
				$count = mysqli_fetch_assoc($result)['count'];
				$pages_counter = ceil($count/$news_on_page);

				if($page>1){
					?>
						<a href="?page=1" class="notactive-pagination next-pagination">В начало</a>
						<a href="?page=<?php echo $page-1; ?>" class="notactive-pagination next-pagination">Назад</a>
					<?php
				}
				for($i=1;$i<=$pages_counter;$i++){
					if($i==$page){
						$class = "active-pagination";
					}else{
						$class = "notactive-pagination";
					}
					?>
					<a href="?organizer=<?php echo $organizer_id; ?>&page=<?php echo $i; ?>" class="<?php echo $class ?>"><?php echo $i; ?></a>
					<?php
				}
				if($page<$pages_counter){
					?>
						<a href="?organizer=<?php echo $organizer_id; ?>&page=<?php echo $page+1; ?>" class="notactive-pagination next-pagination">Далее</a>
						<a href="?organizer=<?php echo $organizer_id; ?>&page=<?php echo $pages_counter; ?>" class="notactive-pagination next-pagination">В конец</a>
					<?php
				}
			 ?>
		</div>
  </div>
	<?php
 	include "../footer.php";
   ?>

</html>
<script src="/mediacenter/static/scripts/theia-stycky-sidebar.min.js">
</script>
<script>
jQuery(document).ready(function() {
jQuery('.news-body-left, .news-body-right').theiaStickySidebar({
        // Настройки
        additionalMarginTop: 30
    });
 });
</script>
