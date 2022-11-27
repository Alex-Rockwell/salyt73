<?php session_start(); ?>
<?php 
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
require_once "connect.php"; 

?>
<style>
	section.katalog_pu{
		width: 94%; 
		padding: 0px;
		text-align: center;
		font-family: arial;
	}
	section.katalog_pu form{
		width: 500px;
		padding: 20px;
		margin-top: 50px;
		text-align-last: left;
		display: inline-block;
	}
	section.katalog_pu input{
		font-size: 15px;
		display: inline-block;
		width: 100%;
		padding: 5px;
	}
	section.katalog_pu input.button {
		background-color: #3a8104;
		color: #fff;
		margin-top: 10px;
		text-align: center;
		padding: 10px 40px;
		width: auto;
		text-transform: uppercase;
		border: 3px solid #3a8104;
	}
	section.katalog_pu label{
		font-size: 12px;
		display: inline-block;
		width: 100%;
		margin-top: 10px;
		text-transform: uppercase;
	}
	section.katalog_pu select{
		font-size: 15px;
		display: inline-block;
		width: 100%;
		padding: 5px;
	}
	section.katalog_pu textarea{
		font-size: 15px;
		display: inline-block;
		width: 100%;
		padding: 5px;
		height: 200px;
	}

	.top{
		text-align: right;
		padding: 10px;
	}

	section.katalog_pu .top form{
		display: inline-block;
		padding: 0px;
		margin-top: 0px;
		text-align-last: left;
		display: inline-block;
		margin: 0px;
	}

	div#classParam{
		margin: 10px 0px; 
	}

	ul.CatList{
		margin: 0px;
		padding: 0px;
		list-style-type: none;
		text-align: left;
		font-size: 10px;
		text-transform: uppercase;
		letter-spacing: 1px;
	}

	ul.CatList li{
		display: inline-block;
		width: auto;
		padding: 5px 10px;
		border-radius:3px;
		background-color: #3a8140;
		color: #fff;
		margin: 3px;
		cursor: pointer;
	}



	ul.CatList li.active{
		background-color: #eee;
		color: #3a8140;
	}

	ul.CatList li:hover{
		opacity:0.5;
	}

	div.message{
		width: 100%;
		background: #159731;
		color: #fff;
	}

	div.message.error{
		width: 100%;
		background: #cb0b02;
	}

</style>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	function GoCatList(cat){

		var tmp_cat = cat;
		$.ajax({
			type: "POST",
			url: "connect.php",
			data: { cat:tmp_cat}
		}).done(function( result )
		{
			$("#classParam").html(result)
		});

	}
</script>

<?php if (isset($_POST["exit_pu"])): ?>
	<?php 
	unset($_SESSION['password']);
	unset($_SESSION['login']);
	?>
<?php endif ?>



<?php if (isset($_POST["go_usr"])): ?>
	<?php 

	$login = $_POST["login"];
	$pass = $_POST["password"];
	if (userInfoLogin($login, $pass)) {
		$_SESSION["login"] = $login;
		$_SESSION["password"] = $pass;
	}
	?>
<?php endif ?>


<?php if (isset($_SESSION["login"])): ?>
	
<?php endif ?>

<?php if (isset($_SESSION["login"])): ?>

	<?php 
	$login = $_SESSION["login"];
	$pass = $_SESSION["password"];
	?>

	<?php 
	// if (isset($_POST["newProduct"])) {
	// 	NewProductView($_POST);
	// }
	?>



	
	<?php if (userInfoLogin($login, $pass)): ?>
		
		<section style="" class="katalog_pu">
			<div class="top">
				<form action="adminpanel.php" method="POST"  enctype="multipart/form-data" >
					<input  class="button" type="submit" value="Выход" name="exit_pu" id="exit_pu">
				</form>
				<a href="adminpanel.php?param=portfolio" class="button">Портфолио</a>
				<a href="adminpanel.php?param=catalog" class="button">Каталог</a>
			</div>

			<form action="adminpanel.php" method="POST"  enctype="multipart/form-data" >
				
				
				
				<?php if ($_GET['param'] == "catalog" || !isset($_GET['param'])): ?>
					<label for="name">НАИМЕНОВАНИЕ ПРОДУКТА</label>
				<input type="text" value="" id="name" name="name">


				<label for="name">АРТИКУЛ</label>
				<input type="text" value="" id="art" name="art">

				<label for="img">КАРТИНКА</label>
				<input type="file" id="img" name="img">


				<div id="classParam">
				<label for="name">ВЫБРАТЬ КАТЕГОРИЮ</label>
					<ul class="CatList">
						<li onclick="GoCatList('gender')" class="active">Гендер пати</li>
						<li onclick="GoCatList('battery')">Батареи салютов</li>
						<li onclick="GoCatList('petard')">Петарды</li>
						<li onclick="GoCatList('rim')">Римские свечи</li>
						<li onclick="GoCatList('bengal')">Бенгальские свечи</li>
						<li onclick="GoCatList('rocket')">Ракеты</li>
						<li onclick="GoCatList('hlop')">Хлопушки</li>
						<li onclick="GoCatList('nazem')">Наземные и летающие фейерверки</li>
						<li onclick="GoCatList('svechi')">Свечи для торта</li>
						<li onclick="GoCatList('balls')">Воздушные гелевые шары</li>
						<li onclick="GoCatList('сol_smoke')">Цветной дым</li>
						<li onclick="GoCatList('cold_fountains')">Холодные фонтаны</li>
					</ul>
					<h3 for="name">Параметры <b>"Гендер пати"</b></h3>
					<input type="hidden" name="cat_produkt" id="cat_produkt" value="gender">

					<label for="time">Время дыма:</label>
					<input type="text" value="" id="time" name="time">

					<label for="start">Запуск дыма:</label>
					<input type="text" value="" id="start" name="start">

					<label for="color">Цвет дыма:</label>
					<input type="text" value="" id="color" name="color">

					<label for="type">Тип дыма:</label>
					<input type="text" value="" id="type" name="type">

				</div>
				<input  class="button" type="submit" value="отправить" name="newProduct" id="newProduct">





				<?php else: ?>
					<label for="name">Описание фотографии</label>
				<input type="text" value="" id="name" name="name">

				<label for="img">Изображение</label>
				<input type="file" id="img" name="img">

				<label for="img">Выбрать категорию</label>

				<?php 
				
				echo goSelectList();

				?>
				<input  class="button" type="submit" value="отправить" name="portfolioImg" id="portfolioImg">
				
				<?php endif ?>

			</form>
		</section>
		
	<?php endif ?>
	<?php else: ?>

		<section style="" class="katalog_pu">
			<form action="adminpanel.php" method="POST"  enctype="multipart/form-data" >
				<h2>Авторизация</h2>
				<label for="login">LOGIN</label>
				<input type="text" required value="" id="login" name="login">

				<label for="password">PASSWORD</label>
				<input type="password" required  value="" id="password" name="password">

				<input  class="button" type="submit" value="Войти" name="go_usr" id="go_usr">
			</form>
		</section>

	<?php endif ?>
