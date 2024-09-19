<?php
if (empty($_SESSION['token'])) {
    if (function_exists('mcrypt_create_iv')) {
        $_SESSION['token'] = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
    } else {
        $_SESSION['token'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
}
$token = $_SESSION['token'];
require 'base.php';

$url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url = explode('?', $url);
$urlfull = $url[0];
$url = explode('/', $urlfull);
$url = $url[3];
$descr = 'ИП “ArsMetall” берет начала с 2016 года в сфере реализации металла и металлической продукции, а с 2018 года начинает работать  в сфере реализации строительных материалов.  В этом году состоялось открытие третьего магазина,который  поставляет металл в большом ассортименте.На сегодняшний день ИП “ASAR строй” – диномично развивается, Заключает договара с новыми компаниями  для поставки новых  и современных товаров по доступным ценам , для удобства наших покупателей! Работая с  2016 года компания собрала надежную и дружную команду по обслуживанию покупателей, что в сочетании с опытом работы,позволяет нам успешно решать вопросы по-доставке,отгрузке и реализации сторительных материалов любой сложности.';
if($url == 'about') $title = 'О компании';else
if($url == '') $title = 'ArsMetall - Металлопрокат в Талдыкоргане';else
if($url == 'products') $title = 'Каталог';else
if($url == 'whywe') $title = 'Почему мы?';else
if($url == 'contacts') $title = 'Контакты';else
if($url == 'addproducts') $title = 'Добавить в каталог';else
if($url == 'update') $title = 'Изменить продукт';else
if($url == 'product') {
    $id = $_GET['id'];    
    $sql = "SELECT * FROM `products` WHERE `id` = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $title = $row['name'];
    $descr = $row['description'];
}
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="Арматура, армасетка, Российская арматура, труба, круглые трубы, квадратные трубы, металл, металлопрокат, профнастил, швеллер, краски, строй материал, строительный магазин, круг, катанка, лист, сталь листовая, лист стальной, оцинкованные листы, прут, кованные изделия, вязальная проволока, уголок, стальной уголок, листовой металл, профильные трубы, водо-газопроводные трубы, электрод, лакокраска, резка, арматура Тдк, металл Талдыкорган, металлопрокат тдк, профиль, профлист талдыкороган, поликарбокат, пеноплэкс, гипсокартон талдыкорган, стройка талдыкорган, цемент талдык, osb. Дсп, фанера, талдык, тдк">
        <meta name="description" content="<?=$descr?>">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="/css/site.css?v=1.5">
		<link rel="stylesheet" href="/css/media.css?v=1.5">
		<link rel="canonical" href="<?=$urlfull?>" />
		<title><?=$title?></title>
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-N9VQ2KGM');</script>
<!-- End Google Tag Manager -->
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N9VQ2KGM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
        <a href="https://wa.me/77053700073" class="mob-whp" target="_blank"><img src="/img/whp1.png" class="whp1"></a>
		<div class="header">
			<div class="container">
				<a href="/">
					<img src="/images/logo.svg	" alt="" class="logo">
				</a>
				<div class="menus">
					<a href="/" class="menuit">Главная</a>
					<a href="/products" class="menuit">Каталог</a>
					<a href="/about" class="menuit">О компании</a>
					<a href="/whywe" class="menuit">Почему мы?</a>
					<a href="/contacts" class="menuit">Контакты</a>
				</div>
				<span class="burger" onclick="showmobmenu()"></span>
				<div class="clear"></div>
			</div>
		</div>
		<div class="mobmenu">
			<a href="/" class="menumobit">Главная</a>
			<a href="/products" class="menumobit">Каталог</a>
			<a href="/about" class="menumobit">О компании</a>
			<a href="/whywe" class="menumobit">Почему мы?</a>
			<a href="/contacts" class="menumobit">Контакты</a>
		</div>