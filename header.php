
<?php
	$ems="";
	if (isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);
		$request_url = str_replace("#auth", "", $_POST['request_url']);
		if($count == 1){
			$_SESSION['username'] = $username;
			header('Location:' . $request_url);
		}else{
			$ems = "Неверный логин или пароль";
		}
	}
 ?>



<div class="wrapper">
	<div class="cap">
		<div class="logo">
			<a href="/mediacenter"><img src="/mediacenter/static/images/logo.png" alt="logo" width="100px" height="100px"></a>
		</div>
		<div class="logo-text">
			<a href="/mediacenter">
			<h1>МЕДИА ЦЕНТР</h1>
			<h3>ППОС СВФУ</h3></a>
		</div>
		<div class="menu">
		<ul>
			<li><a href="/mediacenter">Домой</a> </li>
			<li><a href="/mediacenter/pages/news.php">Новости</a></li>
			<?php
				if(isset($_SESSION['username'])){
			 ?>
			 	<style media="screen">
			 		.menu{
						margin: 33px 0 0 174px;
					}
			 	</style>
			 	<li><a href="/mediacenter/pages/adminpage.php">Админка</a></li>
			 	<li><a href="/mediacenter/logout.php?nextlogout=<?php echo $_SERVER["REQUEST_URI"];?>" style="background: #1bbc9b; color: #fff;">Выйти (<?php echo $_SESSION['username']; ?>)</a></li>
			<?php
				}else{
			 ?>
			 	<li><a href="#auth">Авторизация</a></li>
			 <?php
		 		}
			  ?>
		</ul>
		</div>
	</div>
	<div id="auth" class="modalbackground">
		<div class="modalwindow">
			<div class="modal-top">
				<h3>Авторизация</h3>
				<a href="" class="modal-button">&#215;</a>
			</div>
			<div class="modal-form">
				<form class="" action="?next=<?php echo $_SERVER["REQUEST_URI"]; ?>" method="post">
					<label for="login" class="form-label">Логин:</label>
					<input type="login" class="modal-button-input" name="username" value="" placeholder="Логин">
					<label for="login" class="form-label">Пароль:</label>
					<input type="password" class="modal-button-input" name="password" value="" placeholder="Пароль">
					<label for="" class="form-error"><?php if($ems){ echo $ems; } ?></label>
					<input type="text" name="request_url" value="<?php echo $_SERVER["REQUEST_URI"]; ?>" style="display: none;">
					<input type="submit" class="modal-button-vvod" name="login-button" value="Войти">
				</form>
			</div>
		</div>
	</div>
</div>
