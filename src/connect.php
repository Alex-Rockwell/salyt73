<?php 


function ConnectDB(){
	// $mysqli = mysqli_connect('localhost', 'salytadmin', 'fD9iU3jL9m', 'salyt73') or die(mysqli_error($mysqli));
	$mysqli = mysqli_connect('localhost', 'root', 'root', 'salyt73') or die(mysqli_error($mysqli));
	$mysqli->set_charset("utf8");
	return $mysqli;
}




function debug($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}


function userInfoLogin($login, $pass){
	$connect = ConnectDB();       
	$bases = "SELECT * FROM user WHERE login = '$login' and password = '$pass'";
	if($infoDB = $connect->query($bases)){
		$mass= $infoDB->fetch_all(MYSQLI_ASSOC);
		foreach ($infoDB = $connect->query($bases) as $key) {
			if ($login == $key["login"] && $pass == $key["password"]) {
				return true;
			}
			return false;
		}
	}
	else{
		return false;
	}
}


function GoProduktList($cat){
	$connect = ConnectDB();       
	$bases = "SELECT * FROM catalog WHERE cat_produkt = '$cat'";

	if($infoDB = $connect->query($bases)){
		$mass= $infoDB->fetch_all(MYSQLI_ASSOC);
		$message = "<p>Удачное подключение</p>";
	}
	else{
		return $message = "<h2>Товаров нет</h2>";
	}

	$list='

	<li class="category__item" data-category="Гендер пати"><ul class="short-list short-list_active">';
	foreach ($infoDB = $connect->query($bases) as $key) {

		$list.= '
		<li class="short-list__item" itemprop="itemListElement" itemscope itemtype="https://schema.org/Offer">
			<article class="short-list__article" itemprop="itemOffered" itemscope itemtype="https://schema.org/Product">
				<h3 class="short-list__title" itemprop="name">'.$key["name"].'</h3>
				<span class="short-list__category" itemprop="category">'.$key["article"].'</span>
				<div class="short-list__wrapper">
					<picture itemprop="image">
						<img class="short-list__img" src="img/pages/category/'.$key["cat_produkt"].'/'.$key["img"].'" alt="'.$key["name"].'">
					</picture>
					<ul class="short-list__list" itemprop="description" itemscope itemtype="https://schema.org/ItemList">
						<li class="short-list__list-item" itemprop="itemListElement">
							<span class="short-list__list-item-text short-list__list-item-text_charges">'.$key["charge"].'</span>
						</li>
						<li class="short-list__list-item" itemprop="itemListElement">
							<span class="short-list__list-item-text short-list__list-item-text_duration">'.$key["timing"].'</span>
						</li>
						<li class="short-list__list-item" itemprop="itemListElement">
							<span class="short-list__list-item-text short-list__list-item-text_height">'.$key["height"].'</span>
						</li>
						<li class="short-list__list-item" itemprop="itemListElement">
							<span class="short-list__list-item-text short-list__list-item-text_effects">'.$key["effect"].'</span>
						</li>
					</ul>
				</div>
				<div class="short-list__flex">
					<div class="short-list__price">
						<span class="short-list__price-text">
							<span itemprop="price" content="'.$key["price"].'">'.$key["price"].'</span>
						</span>
					</div>
				</div>
			</article>
			<div class="card__details">Описание карточки товара
				<ul class="short-list__list" itemprop="description" itemscope itemtype="https://schema.org/ItemList">
					<li class="short-list__list-item" itemprop="itemListElement">
						<span class="short-list__list-item-text short-list__list-item-text_charges">'.$key["charge"].'</span>
					</li>
					<li class="short-list__list-item" itemprop="itemListElement">
						<span class="short-list__list-item-text short-list__list-item-text_duration">'.$key["timing"].'</span>
					</li>
					<li class="short-list__list-item" itemprop="itemListElement">
						<span class="short-list__list-item-text short-list__list-item-text_height">'.$key["height"].'</span>
					</li>
					<li class="short-list__list-item" itemprop="itemListElement">
						<span class="short-list__list-item-text short-list__list-item-text_effects">'.$key["effect"].'</span>
					</li>
				</ul>
			</div>
		</li>';
	}

	$list.='</ul></li>';

	return $list;
}




function goCatService($cat) {
	$connect = ConnectDB();       
	$bases = "SELECT * FROM `cat_service` WHERE icon = '$cat'";

	if($infoDB = $connect->query($bases)){
		$mass= $infoDB->fetch_all(MYSQLI_ASSOC);
		$message = "<p>Удачное подключение</p>";

		foreach ($infoDB = $connect->query($bases) as $key) {
			$id = $key['id'];
		}

		return $id;

	}
	else{
		return $message = "<h2>Фотографий нет</h2>";
	}
}


function GoPortfolioList($cat){
	$id_cs = goCatService($cat);
	$connect = ConnectDB();       
	$bases = "SELECT * FROM `portfolio` WHERE cat_cs = '$id_cs'";

	if($infoDB = $connect->query($bases)){
		$mass= $infoDB->fetch_all(MYSQLI_ASSOC);
		$message = "<p>Удачное подключение</p>";
	}
	else{
		return $message = "<h2>Фотографий нет</h2>";
	}

	$list='    <script src="js/libs/fslightbox.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>';
	foreach ($infoDB = $connect->query($bases) as $key) {

		$list.= '<li class="portfolio__item">
		<a class="portfolio__item-link" href="img/pages/portfolio/preview/'.$key["preview"].'" data-fslightbox="portfolio">
			<img src="img/pages/portfolio/preview/'.$key["preview"].'" alt="Фото" class="portfolio__item-img">
		</a>
	</li>';

	}

	$list.='';

	return $list;
}

function goSelectList() {
	$connect = ConnectDB();       
	$bases = "SELECT * FROM `cat_service`";

	if($infoDB = $connect->query($bases)){
		$mass= $infoDB->fetch_all(MYSQLI_ASSOC);
		$message = "<p>Удачное подключение</p>";

		$list = '<select name="catPortfolio" id="catPortfolio">';

		foreach ($infoDB = $connect->query($bases) as $key) {
			$list.='<option value="'.$key["id"].'">
				'.$key["name"].'
			</option>';
		}

		return $list.='</select>';

	}
	else{
		return $message = "<h2>Фотографий нет</h2>";
	}
}









// function NewProductView($arr){


// 	//debug($arr);

// 	$name = $arr["name"];
// 	$art = $arr["art"];
// 	$title = $arr["name"];
// 	$text = $arr["name"];
// 	$image = $arr["img"].".jpg";
// 	$dlinna = $arr["dlinna"];
// 	$shirina = $arr["shirina"];
// 	$visota = $arr["visota"];
// 	$garant = "По договоренности";
// 	$cena = "0";
// 	$link = $arr["img"];
// 	$new = "0";
// 	$sale = "0";
// 	$dop_info = $arr["info"];
// 	$katalog_id = $arr["katalog_id"];

// 	$connect = ConnectDB();  
// 	$query = "INSERT INTO `produkt` (name, art, title, `text`, image, dlinna, shirina, visota, garant, cena, link, new, sale, dop_info, katalog_id)
// 	VALUES ('$name', '$art', '$title', '$text', '$image', '$dlinna', '$shirina', '$visota', '$garant', '$cena', '$link', '$new', '$sale', '$dop_info', '$katalog_id')";

// 	$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
// }

if (isset($_POST["cat"])) {

	switch ($_POST["cat"])
	{
		case 'gender': $nameCat = "Гендер пати"; break;
		case 'battery': $nameCat = "Батареи салютов"; break;
		case 'petard': $nameCat = "Петарды"; break;
		case 'rim': $nameCat = "Римские свечи"; break;
		case 'bengal': $nameCat = "Бенгальские свечи"; break;
		case 'rocket': $nameCat = "Ракеты"; break;
		case 'hlop': $nameCat = "Хлопушки"; break;
		case 'nazem': $nameCat = "Наземные и летающие фейерверки"; break;
		case 'svechi': $nameCat = "Свечи для торта"; break;
		case 'balls': $nameCat = "Воздушные гелевые шары"; break;
		case 'ol': $nameCat = "Цветной дым"; break;

	}
	
	$cont = '
	<h3 for="name">Параметры <b>"'.$nameCat.'"</b></h3>
	<input type="hidden" name="cat_produkt" id="cat_produkt" value="'.$_POST["cat"].'">
	';

	switch ($_POST["cat"])
	{
		case "gender": 
		$cont .= '
		<label for="time">Время дыма:</label>
		<input type="text" value="" id="time" name="time">

		<label for="start">Запуск дыма:</label>
		<input type="text" value="" id="start" name="start">

		<label for="color">Цвет дыма:</label>
		<input type="text" value="" id="color" name="color">

		<label for="type">Тип дыма:</label>
		<input type="text" value="" id="type" name="type">
		'; break;



		case "battery":
		$cont .= '
		<label for="time">Время работы:</label>
		<input type="text" value="" id="time" name="time">

		<label for="height">Высота:</label>
		<input type="text" value="" id="height" name="height">

		<label for="kalibr">Калибр:</label>
		<input type="text" value="" id="kalibr" name="kalibr">

		<label for="kol">Кол-во залпов:</label>
		<input type="text" value="" id="kol" name="kol">
		'; break;


		case "ol-smoke": 
		$cont .= '
		<label for="time">Время дыма:</label>
		<input type="text" value="" id="time" name="time">

		<label for="start">Запуск дыма:</label>
		<input type="text" value="" id="start" name="start">

		<label for="color">Цвет дыма:</label>
		<input type="text" value="" id="color" name="color">

		<label for="type">Тип дыма:</label>
		<input type="text" value="" id="type" name="type">
		'; break;

		
		case "petard": 
		$cont .= '
		<label for="time">Время работы:</label>
		<input type="text" value="" id="time" name="time">

		<label for="sound">Громкость:</label>
		<input type="text" value="" id="sound" name="sound">

		<label for="type">Тип запала:</label>
		<input type="text" value="" id="type" name="type">

		<label for="effect">Эффект:</label>
		<input type="text" value="" id="effect" name="effect">
		'; break;

		
		case "rim": 
		$cont .= '
		<label for="time-rim">Время работы:</label>
		<input type="text" value="" id="time" name="time">
		'; break;

		
		case "bengal": 
		$cont .= '
		<label for="time">Время:</label>
		<input type="text" value="" id="time" name="time">

		<label for="width">Длина:</label>
		<input type="text" value="" id="width" name="width">

		<label for="type">Тип:</label>
		<input type="text" value="" id="type" name="type">

		<label for="col">Штук в упаковке:</label>
		<input type="text" value="" id="col" name="col">
		'; break;

		
		case "rocket": 
		$cont .= '
		<label for="color">Кол-во цветов:</label>
		<input type="text" value="" id="kol_color" name="kol_color">
		'; break;

		
		case "hlop": 
		$cont .= '
		<label for="width">Длина:</label>
		<input type="text" value="" id="width" name="width">

		<label for="sostav">Наполнение:</label>
		<input type="text" value="" id="sostav" name="sostav">
		'; break;


		case "nazem": 
		$cont .= '
		<label for="effect">Эффект:</label>
		<input type="text" value="" id="effect" name="effect">
		'; break;

		case "svechi": 
		$cont .= '
		<label for="col">Кол-во в упаковке:</label>
		<input type="text" value="" id="col" name="col">
		'; break;

		case "balls": 
		$cont .= '
		<label for="col">Кол-во в упаковке:</label>
		<input type="text" value="" id="col" name="col">
		'; break;
	}

	$gender=$battery=$petard=$rim=$bengal=$rocket=$hlop=$nazem=$svechi=$balls=$ol_smoke="";

	if ($_POST["cat"] == 'gender') { $gender = "class='active'" ; }
	if ($_POST["cat"] == 'battery') { $battery = "class='active'" ; }
	if ($_POST["cat"] == 'petard') { $petard = "class='active'" ; }
	if ($_POST["cat"] == 'rim') { $rim = "class='active'" ; }
	if ($_POST["cat"] == 'bengal') { $bengal = "class='active'" ; }
	if ($_POST["cat"] == 'rocket') { $rocket = "class='active'" ; }
	if ($_POST["cat"] == 'hlop') { $hlop = "class='active'" ; }
	if ($_POST["cat"] == 'nazem') { $nazem = "class='active'" ; }
	if ($_POST["cat"] == 'svechi') { $svechi = "class='active'" ; }
	if ($_POST["cat"] == 'balls') { $balls = "class='active'" ; }
	if ($_POST["cat"] == 'ol_smoke') { $ol_smoke = "class='active'" ; }
	


	$head = '
	<label for="name">ВЫБРАТЬ КАТЕГОРИЮ</label>
	<ul class="CatList">
	<li onclick="GoCatList(`gender`)" '.$gender.'>Гендер пати</li>
	<li onclick="GoCatList(`battery`)" '.$battery.'>Батареи салютов</li>
	<li onclick="GoCatList(`petard`)" '.$petard.'>Петарды</li>
	<li onclick="GoCatList(`rim`)" '.$rim.'>Римские свечи</li>
	<li onclick="GoCatList(`bengal`)" '.$bengal.'>Бенгальские свечи</li>
	<li onclick="GoCatList(`rocket`)" '.$rocket.'>Ракеты</li>
	<li onclick="GoCatList(`hlop`)" '.$hlop.'>Хлопушки</li>
	<li onclick="GoCatList(`nazem`)" '.$nazem.'>Наземные и летающие фейерверки</li>
	<li onclick="GoCatList(`svechi`)" '.$svechi.'>Свечи для торта</li>
	<li onclick="GoCatList(`balls`)" '.$balls.'>Воздушные гелевые шары</li>
	<li onclick="GoCatList(`ol_smoke`)" '.$ol_smoke.'>Цветной дым</li>
	</ul>
	';


	echo $head.$cont;


}



if (isset($_POST["newProduct"])) { 
	$name="Без названия";
	$article="0";
	$cat_produkt="-";
	$tims="-";
	$height="-";
	$width="-";
	$kalibr="-";
	$kol="-";
	$start="-";
	$color="-";
	$type="-";
	$sound="-";
	$effect="-";
	$kol_color="-";
	$sostav="-";
	$connect = ConnectDB(); 

	if (isset($_POST["name"]) || $_POST["name"] != "") { $name = $_POST["name"]; } else {$name="Без названия";}
	if (isset($_POST["art"]) || $_POST["art"] != "") { $article = $_POST["art"]; } else {$article="0";}
	if (isset($_POST["cat_produkt"]) || $_POST["cat_produkt"] != "") { $cat_produkt = $_POST["cat_produkt"]; } else {$cat_produkt="-";}
	if (isset($_POST["time"]) || $_POST["time"] != "") { $tims = $_POST["time"]; } else {$tims="-";}
	if (isset($_POST["height"]) || $_POST["height"] != "") { $height = $_POST["height"]; } else {$height="-";}
	if (isset($_POST["width"]) || $_POST["width"] != "") { $width = $_POST["width"]; } else {$width="-";}
	if (isset($_POST["kalibr"]) || $_POST["kalibr"] != "") { $kalibr = $_POST["kalibr"]; } else {$kalibr="-";}
	if (isset($_POST["kol"]) || $_POST["kol"] != "") { $kol = $_POST["kol"]; } else {$kol="-";}
	if (isset($_POST["start"]) || $_POST["start"] != "") { $start = $_POST["start"]; } else {$start="-";}
	if (isset($_POST["color"]) || $_POST["color"] != "") { $color = $_POST["color"]; } else {$color="-";}
	if (isset($_POST["type"]) || $_POST["type"] != "") { $type = $_POST["type"]; } else {$type="-";}
	if (isset($_POST["sound"]) || $_POST["sound"] != "") { $sound = $_POST["sound"]; } else {$sound="-";}
	if (isset($_POST["effect"]) || $_POST["effect"] != "") { $effect = $_POST["effect"]; } else {$effect="-";}
	if (isset($_POST["kol_color"]) || $_POST["kol_color"] != "") { $kol_color = $_POST["kol_color"]; } else {$kol_color="-";}
	if (isset($_POST["sostav"]) || $_POST["sostav"] != "") { $sostav = $_POST["sostav"]; } else {$sostav="-";}



	$uploaddir = 'img/pages/category/'.$cat_produkt.'/'; 
	$fname = date("YmdHis");
	require_once "go_images.php";
	$img = $apend;


	$query = "INSERT INTO `catalog` (name, article, cat_produkt, tims, height, width, kalibr, kol, start, color, type, sound, effect, kol_color, sostav, img)
	VALUES ('$name', '$article', '$cat_produkt', '$tims', '$height', '$width', '$kalibr', '$kol', '$start', '$color', '$type', '$sound', '$effect', '$kol_color', '$sostav', '$img')";


	//$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
	if ($result = mysqli_query($connect, $query) or die(mysqli_error($connect))) {
		$message = '
		<div class="message">
		<h3>Имя</h3>
		<p>Запись прошла удачно</p>
		</div>
		';
	}else{
		$message = '
		<div class="message dberror">
		<h3>Имя</h3>
		<p>Что-то пошло не так</p>
		</div>
		';
	}
}

if (isset($_POST["portfolioImg"])) { 
	$name="Без названия";
	$catPortfolio="-";
	$connect = ConnectDB(); 

	if (isset($_POST["name"]) || $_POST["name"] != "") { $name = $_POST["name"]; } else {$name="Без названия";}
	if (isset($_POST["catPortfolio"]) || $_POST["catPortfolio"] != "") { $catPortfolio = $_POST["catPortfolio"]; } else {$catPortfolio="-";}

	$uploaddir = 'img/pages/portfolio/preview/'; 
	$fname = date("YmdHis");
	require_once "go_images.php";
	$img = $apend;


	$query = "INSERT INTO `portfolio` (alt, cat_cs, preview)
	VALUES ('$name', '$catPortfolio', '$img')";


	//$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
	if ($result = mysqli_query($connect, $query) or die(mysqli_error($connect))) {
		$message = '
		<div class="message">
		<h3>'.$name.'</h3>
		<p>Запись прошла удачно</p>
		</div>
		';
	}else{
		$message = '
		<div class="message dberror">
		<h3>Имя</h3>
		<p>Что-то пошло не так</p>
		</div>
		';
	}
}

?>