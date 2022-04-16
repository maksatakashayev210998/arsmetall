<?php require 'base.php';?>
<?php require 'header.php';?>
<?php
$sql = "SELECT * FROM `products` ORDER BY `id` ASC";
$sql1 = "SELECT * FROM `products` ORDER BY `id` ASC LIMIT 21";
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql1);
$result3 = $conn->query($sql);
?>
<div class="block1" id="g1">
	<div class="redline">
		<div class="container">
			<div class="redright bordrgwh">
				<h4 class="redtt">Arsmetall</h4>
				<h4 class="redtt2">металлопрокат</h4>
			</div>
			<div class="redright paddleft">
				<div class="redrgpart1">
					<h4 class="redaddress">Алматинская область, Талдыкорган<br>Ул. Медео 37/1</h4>
				</div>
				<div class="redrgpart2">
					<h4 class="redphones">
						<a class="telnumcall" href="tel:+77084273365">+7 708 427 33 65</a> <br>	
						<a class="telnumcall" href="tel:+77781013012">+7 778 101 30 12</a> 
					</h4>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="exdownload">
		<div class="troubexec">
			<img src="/img/comp1.png?v=2" alt="" class="comp1">
			<div class="goldline">
				<a href="prices.pdf" target="_blank" download class="skach">Скачать "Прайс - лист, металлопрокат"</a>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<div class="block2" id="g2">
	<div class="container">
		<h4 class="blc2txt">Каталог</h4>
		<div class="redliniya"></div>
		<div class="sliderblock">
			<img src="/img/arrow.png" alt="" class="arrowleft" onclick="slideleft()">
			<div class="catalog">
				<div class="catalog_slider" id="ctsd">
					<?php
					$i = 0;
					while($product = $result1->fetch_assoc()){
						$i++;
						if($product['img']) $img = $product['img']; else $img = '/cat/1.jpg';
						if(strlen($product['description']) > 380) $descr = substr( $product['description'], 0, 380).'...'; else $descr = $product['description'];
					?>
					<a href="/product?id=<?=$product['id']?>" target="_blank">
						<div class="mats" id="mat<?=$i?>">
							<img src="<?=$img?>" alt="" class="imgmat">
							<div class="line"></div>
							<div class="textts">
								<h4 class="matname"><?=$product['name']?></h4>
								<h4 class="mattxt"><?=$descr?></h4>
							</div>
						</div> 
					</a>
					<?php
					}
					?>
					<div class="clear"></div>
				</div>
				<div class="mob-catslider">
					<?php
					$i = 0;
					while($product = $result2->fetch_assoc()){
						$i++;
						if($product['img']) $img = $product['img']; else $img = '/cat/1.jpg';
						if(strlen($product['description']) > 380) $descr = substr( $product['description'], 0, 380).'...'; else $descr = $product['description'];
					?>
					<a href="/product?id=<?=$product['id']?>" target="_blank">
						<div class="matsslider" id="mats<?=$i?>">
							<img src="<?=$img?>" alt="" class="imgmat">
							<div class="line"></div>
							<div class="textts">
								<h4 class="matname"><?=$product['name']?></h4>
								<h4 class="mattxt"><?=$descr?></h4>
							</div>
						</div>
					</a>
					<?php
					}
					?>
				</div>
			</div>
			<img src="/img/arrow.png" alt="" class="arrowright" onclick="slideright()">
			<div class="clear"></div>
			<div class="arrows-mob">
				<img src="/img/arrow.png" alt="" class="arrowmobleft" onclick="slidemleft()">
				<img src="/img/arrow.png" alt="" class="arrowmobright" onclick="slidemright()">
				<div class="clear"></div>
			</div>
			<div class="arrows-mob1200">
				<img src="/img/arrow.png" alt="" class="arrowmobleft" onclick="slideleft()">
				<img src="/img/arrow.png" alt="" class="arrowmobright" onclick="slideright()">
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="allprod">
			<?php
			$i = 0;
			while($product = $result3->fetch_assoc()){
				$i++;
				if($product['img']) $img = $product['img']; else $img = '/cat/1.jpg';
				if(strlen($product['description']) > 380) $descr = substr( $product['description'], 0, 380).'...'; else $descr = $product['description'];
			?>
			<a href="/product?id=<?=$product['id']?>" target="_blank">
				<div class="mats" id="mat<?=$i?>">
					<img src="<?=$img?>" alt="" class="imgmat">
					<div class="line"></div>
					<div class="textts">
						<h4 class="matname"><?=$product['name']?></h4>
						<h4 class="mattxt"><?=$descr?></h4>
					</div>
				</div> 
			</a>
			<?php
			}
			?>
		</div>
		<div class="clear"></div>
		<button class="showall" onclick="showall()">Смотреть все предложения</button>
	</div>
</div>
<input type="hidden" value="1" id="cursor">
<input type="hidden" value="1" id="pgnomer">
<div class="block3" id="g3">
	<img src="/images/block3.svg" alt="" class="blo3png">
	<div class="blo3div">
		<h4 class="blo3tt">Arsmetall</h4>
		<div class="block4redline"></div>
		<h4 class="onastxt">Компания «ARSmetall» продаёт металлопрокат и поставляет его на территории Талдыкоргана и Алматиснкой обалсти. Мы понимаем, как дорого обходятся простои по причине отсутствия нужного материала. Как важно получить его в срок и должного качества. Как важно выбрать поставщика, которому можно доверять. Мы продаём металл лучшего качества.</h4>
		<div class="countblock">
			<div class="counts">
				<h4 class="number" id="num1">0</h4>
				<h4 class="numbertxt">позиций металл</h4>
			</div>
			<div class="counts">
				<h4 class="number" id="num2">0</h4>
				<h4 class="numbertxt">металлобазы</h4>
			</div>
			<div class="counts">
				<h4 class="number" id="num3">0</h4>
				<h4 class="numbertxt">рабочих мест</h4>
			</div>
			<div class="counts">
				<h4 class="number" id="num4">0</h4>
				<h4 class="numbertxt">час отработки заявки</h4>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>
</div>
<div class="block4" id="g4">
	<div class="container">
		<div class="block4pr1">
			<h4 class="block4tt1">Мы гордимся</h4>
			<div class="redliniya"></div>
			<div class="gordyblock">
				<div class="galas">
					<img src="/images/galc.svg" alt="" class="galochka">
					<h4 class="galochkatxt">Профессиональная команда менеджеров поможет разобраться что вам необходимо, за 10 минут сформирует вам предложение по стоимости</h4>
					<div class="clear"></div>
				</div>
				<div class="galas ">
					<img src="/images/galc.svg" alt="" class="galochka">
					<h4 class="galochkatxt">Команда резчиков подготовит металл к отгрузке</h4>
					<div class="clear"></div>
				</div>
				<div class="galas ">
					<img src="/images/galc.svg" alt="" class="galochka">
					<h4 class="galochkatxt">В нашей компании ответственный и сплоченный штат сотрудников. Сервис и профессионализм на высшем уровне! </h4>
					<div class="clear"></div>
				</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="blocks4pr2">
			<h4 class="block4tt1">Почему мы</h4>
			<div class="redliniya"></div>
			<div class="whyus">
				<div class="row">
					<div class="col-sm-4 col-xs-12 mobmb20">
						<img src="/images/wl1.svg" alt="" class="walls">
						<h4 class="walltt">Выгодная цена!</h4>
						<h4 class="walltxt">Приемлимая цена, соответствующая качеству товара! </h4>
					</div>
					<div class="col-sm-4 col-xs-12 mobmb20">
						<img src="/images/wl2.svg" alt="" class="walls">
						<h4 class="walltt">Большой ассортимент!</h4>
						<h4 class="walltxt">Мы предлагаем огромный выбор металлопроката.</h4>
					</div>
					<div class="col-sm-4 col-xs-12 mobmb20">
						<img src="/images/wl3.svg" alt="" class="walls">
						<h4 class="walltt">Проверенная продукция!</h4>
						<h4 class="walltxt">Металлопрокат только от брендовых производтелей (Россия, Германия).</h4>
					</div>
				</div>
				<div class="row mt40">
					<div class="col-sm-4 col-xs-12 mobmb20">
						<img src="/images/wl4.svg" alt="" class="walls">
						<h4 class="walltt">Бонусы клиентам!</h4>
						<h4 class="walltxt">Гибкая система скидок для постоянных и оптовых покупателей.</h4>
					</div>
					<div class="col-sm-4 col-xs-12 mobmb20">
						<img src="/images/wl5.svg" alt="" class="walls">
						<h4 class="walltt">Отличное обслуживание покупателей!</h4>
						<h4 class="walltxt">Индивидуальный подход, консультация специалистов. Мы поможем Вам найти именно то, что Вы ищете.</h4>
					</div>
					<div class="col-sm-4 col-xs-12 mobmb20">
						<img src="/images/wl6.svg" alt="" class="walls">
						<h4 class="walltt">Быстро и качественно!</h4>
						<h4 class="walltxt">Качественные работы по металлу в кратчайшие сроки.</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
//$token = "1234".":".MD5("1234" + ":" + "abcdef");
?>
<div class="block5" id="g5">
	<div class="container">
		<h4 class="blo5tt">Контакты</h4>
		<div class="redliniya"></div>
		<div class="maps">
			<div class="formmap">
				<form action="mail.php" method="POST">
					<input type="hidden" name="csrf" value="<?=$token?>">
					<div class="frm12">
						<div class="fr22">
							<label for="" class="labelsuser">ФИО</label>
						</div>
						<div class="fr23">
							<input class="forminp" type="text" name="username" placeholder="ФИО" required="true">
						</div>
						<div class="clear"></div>
					</div>
					<div class="frm12">
						<div class="fr22">
							<label for="" class="labelsuser">Телефон:</label>
						</div>
						<div class="fr23">
							<input class="forminp" type="text" name="phone" placeholder="Телефон" id="phone" required="true">
						</div>
						<div class="clear"></div>
					</div>
					<div class="frm12">
						<div class="fr22">
							<label for="" class="labelsuser">Сообщение:</label>
						</div>
						<div class="fr23">
							<textarea class="formtarea" rows="6" name="message" placeholder="Сообщение"></textarea>
						</div>
						<div class="clear"></div>
					</div>
					<button class="send">Отправить</button>
				</form>
			</div>
			<div class="realmap">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3355.3830492983147!2d78.38391030575933!3d44.993866655519255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x427f0034a04665c7%3A0xb7acf6ddc4710fe9!2z0YPQuy4g0JzQtdC00LXRgyAzNywg0KLQsNC70LTRi9C60L7RgNCz0LDQvQ!5e0!3m2!1sru!2skz!4v1650140658419!5m2!1sru!2skz" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</div>
<?php require 'footer.php';?>
		