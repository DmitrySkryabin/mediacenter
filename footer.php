<link href="/mediacenter/static/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"></script>

</script>
<footer>
	<div class="wrapper">
		<div class="footer-content">
			<div class="footer-text-left footer-text">
				<div class="">
					<p><strong>Медиа центр</strong>, структурное подразделение
					Первичной профсоюзной организации студентов
					Северо-восточного федерального университета им
					М.К. Аммосова.</p>
					<p>Отвечаем за информационную политику ППОС СВФУ
					Все вопросы, предложения, жалобы можно направить
					на почту, или в кабинет 308 УЛК (Белинского 58)</p>
					<p><strong>Все публикуемые материалы не являются частью политики
					университета и могут отражать иную позицию от оных.</strong></p>
				</div>
				<div class="programmer-disigner-writer-developer-beautiful">
					<p>2019 @DanaRyui </p>
				</div>
			</div>
			<div class="footer-text-center footer-text">
        <div class="">
          <p>Мы в соцсетях</p>
        </div>
			  <div class="footer-text-center-item">
          <a href="https://vk.com/ppossvfu" target="_blank"><i class="fa fa-vk fa-2x" aria-hidden="true"></i></a>
          <a href="https://www.instagram.com/ppossvfu/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
          <a href="https://twitter.com/PPOSSVFU" target="_blank" ><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></a>
          <a href="https://www.youtube.com/channel/UCH7SYqZYWmAjuQdsi-vTOYQ" target="_blank"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
        </div>
			</div>
			<div class="footer-text-right footer-text">
				<?php
					if(isset($_SESSION['username'])){
				 ?>
				 <a href="/mediacenter/pages/adminpage.php" style="font-size:30px;">Админка</a>
				 <?php
			 			}
				  ?>
        <a href="/mediacenter">Главная</a>
        <a href="/mediacenter/pages/news.php">Новости</a>
        <a href="/mediacenter#portfolio">Наша структура</a>
        <a href="/mediacenter#feedback-form-href" class="footer-feedback">Свяжитесь с нами <i class="fa fa-envelope fa-1x hide-icon"></i> </a>
			</div>
		</div>
	</div>
  <div class="totop">
    <i class="fa fa-chevron-circle-up fa-2x totop-color"></i>
  </div>
</footer>
<script>
  $(".totop").hide();
  $(function() {
  $(window).scroll(function() {
  if($(this).scrollTop() >100) {
      $(".totop").fadeIn();
      $(".cap").addClass("glide");
      //$(".padding-top").addClass("glide");
      $(".logo").fadeOut();
      id=false;
    } else {
      $(".totop").fadeOut();
      $(".cap").removeClass("glide");
      //$(".padding-top").removeClass("glide");
      $(".logo").fadeIn();
    }
    });
    $(".totop").click(function() {
    $('body,html').animate({scrollTop:0},400);
    });
  });
</script>
