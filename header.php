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
					echo "avtorizovan";
			 ?>
			 	<li><a href="logout.php">Выйти(<?php echo $_SESSION['username']; ?>)</a></li>
			<?php
				}else{
					echo "lol";
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
				<form class="" action="" method="post">
					<label for="login" class="form-label">Логин:</label>
					<input type="login" class="modal-button-input" name="username" value="" placeholder="Логин">
					<label for="login" class="form-label">Пароль:</label>
					<input type="password" class="modal-button-input" name="password" value="" placeholder="Пароль">
					<input type="submit" class="modal-button-vvod" name="login-button" value="Войти">
				</form>
			</div>
		</div>
	</div>

</div>
<?php
	session_start();

	if (isset($_POST['username']) && isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM `users` WHERE `username`='$username' and `password`='$password'";
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);
		echo $result;

		if($count == 1){
			$_SESSION['username'] = $username;
		}else{
			$ems = "Ошибка";
		}
	}
 ?>
