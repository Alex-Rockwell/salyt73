<?php  

/* загружаем картинку */


    // это папка, в которую будет загружаться картинка
//$apend=$fname.'.png'; 
if ($_FILES['img']['type'] == 'image/gif') { $type=".gif";}
if ($_FILES['img']['type'] == 'image/jpeg') { $type=".jpg";}
if ($_FILES['img']['type'] == 'image/png') { $type=".png";}
if ($_FILES['img']['type'] == 'application/pdf'){ $type=".pdf";}  
if ($_FILES['img']['type'] == 'application/msword'){ $type=".doc";}  
if ($_FILES['img']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'){ $type=".docx";}  
if ($_FILES['img']['type'] == 'application/vnd.ms-excel'){ $type=".xls";}  
if ($_FILES['img']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'){ $type=".xlsx";}
$apend=$fname.$type; 

    // это имя, которое будет присвоенно изображению 
$uploadfile = "$uploaddir$apend"; 
//в переменную $uploadfile будет входить папка и имя изображения

// В данной строке самое важное - проверяем загружается ли изображение (а может вредоносный код?)
// И проходит ли изображение по весу. В нашем случае до 512 Кб

		// В данной строке самое важное - проверяем загружается ли доступные форматы файлов (а может вредоносный код?)
if(($_FILES['img']['type'] == 'image/gif' || $_FILES['img']['type'] == 'image/jpeg' || $_FILES['img']['type'] == 'image/png' || $_FILES['img']['type'] == 'application/pdf'  || $_FILES['img']['type'] == 'application/msword'  || $_FILES['img']['type'] == 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'  || $_FILES['img']['type'] == 'application/vnd.ms-excel'  || $_FILES['img']['type'] == 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet') && ($_FILES['img']['size'] != 0 and $_FILES['img']['size']<=51200000)) 
{ 
			//Загружаем файл в указанную папку
	move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
}
else{
	echo "<h1>Чтото пошло не так</h1>";
}




?>
