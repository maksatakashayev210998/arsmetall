<?php require 'header.php';?>
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
<style>
	.block5{
		background: #3711871f!important;
	}
</style>
<?php require 'footer.php';?>
