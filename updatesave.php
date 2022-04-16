<?php

require 'base.php';
function translit($value)
{
	$converter = array(
		'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
		'е' => 'e',    'ё' => 'e',    'ж' => 'zh',   'з' => 'z',    'и' => 'i',
		'й' => 'y',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
		'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
		'у' => 'u',    'ф' => 'f',    'х' => 'h',    'ц' => 'c',    'ч' => 'ch',
		'ш' => 'sh',   'щ' => 'sch',  'ь' => '',     'ы' => 'y',    'ъ' => '',
		'э' => 'e',    'ю' => 'yu',   'я' => 'ya',
 
		'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
		'Е' => 'E',    'Ё' => 'E',    'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
		'Й' => 'Y',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
		'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
		'У' => 'U',    'Ф' => 'F',    'Х' => 'H',    'Ц' => 'C',    'Ч' => 'Ch',
		'Ш' => 'Sh',   'Щ' => 'Sch',  'Ь' => '',     'Ы' => 'Y',    'Ъ' => '',
		'Э' => 'E',    'Ю' => 'Yu',   'Я' => 'Ya',
	);
 
	$value = strtr($value, $converter);
	return $value;
}

$id = $_POST['id'];
$prodname = $_POST['name'];
$keywords = $_POST['keywords'];
$description = $_POST['description'];
$link = translit($prodname);

$uploaddir = $_SERVER['DOCUMENT_ROOT'].'/prodimg/';
$ext = pathinfo($_FILES['userfile']['name'], PATHINFO_EXTENSION);
$uploadfile = $uploaddir . time().'.'.$ext;

if($ext){
    $img = substr($row['img'], 1, strlen($row['img']));
    if(file_exists($img)){
        unlink($img);
    }
    if($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg' || $ext == 'JPG' || $ext == 'PNG' || $ext == 'JPEG'){
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
        $path = '/prodimg/'. time().'.'.$ext;
        $sql = "UPDATE `products` SET `img`='$path' WHERE `id`=$id";
        $result = $conn->query($sql);
    }else{
        echo "Возможная атака с помощью файловой загрузки!\n";
    }
}

$sql = "UPDATE `products` SET `name`='$prodname', `description`='$description',`keywords`='$keywords',`link`='$link' WHERE `id`=$id";
$result = $conn->query($sql);

session_start();
$_SESSION['success'] = 1;

header('Location: update?id='.$id);

echo 'Некоторая отладочная информация:';
print_r($_FILES);
?>