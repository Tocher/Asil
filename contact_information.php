<?php include("header.php"); ?>
		<nav class="row">
			<div class="container">
				<div class="row">
					<ul class="list-inline">
						<li class="col-lg-2 col-xs-6 col-sm-3"><a href="/">главная</a></li>
						<li class="col-lg-2 col-xs-6 col-sm-3 col-lg-offset-1"><a href="about.php">о компании </a></li>
						<li class="col-lg-3 col-xs-6 col-sm-3 col-lg-offset-1"><a href="directions.php">направления</a></li>
						<li class="col-lg-2 col-xs-6 col-sm-3 col-lg-offset-1"><a href="contact_information.php" class="active">контактная информация</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="custom-select" style="display:none;">
			<select id="fxselect" name="fxselect">
				<option value="-1">Choose an effect...</option>
				<option value="fxSoftScale" selected>Soft scale</option>
				<option value="fxPressAway">Press away</option>
				<option value="fxSideSwing">Side Swing</option>
				<option value="fxFortuneWheel">Fortune wheel</option>
				<option value="fxSwipe">Swipe</option>
				<option value="fxPushReveal">Push reveal</option>
				<option value="fxSnapIn">Snap in</option>
				<option value="fxLetMeIn">Let me in</option>
				<option value="fxStickIt">Stick it</option>
				<option value="fxArchiveMe">Archive me</option>
				<option value="fxVGrowth">Vertical growth</option>
				<option value="fxSlideBehind">Slide Behind</option>
				<option value="fxSoftPulse">Soft Pulse</option>
				<option value="fxEarthquake">Earthquake</option>
				<option value="fxCliffDiving">Cliff diving</option>
			</select>
		</div>		
		<div class="row component component-fullwidth-child" id="component">
			<img src="img/slide-contact-information.jpg">
		</div>
		<article class="row">
			<div class="container">
				<div class="breadcrumbs col-lg-10 col-xs-12 col-sm-10 col-lg-offset-2 col-xs-offset-0 col-sm-offset-2"><a href="">главная</a> /</div>
				<h2 class="col-lg-10 col-xs-12 col-sm-10 col-lg-offset-2 col-xs-offset-0 col-sm-offset-2"><span>Контактная информация</span></h2>				
				<div class="col-lg-10 col-xs-12 col-sm-10 col-lg-offset-2 col-xs-offset-0 col-sm-offset-2">
					<iframe src="http://mapsengine.google.com/map/embed?mid=z-BEFzFo7gdM.kYdiUKVQpQQI" width="920" height="271"></iframe>
					<p style="margin-top:30px;">Pellentesque ac justo cursus massa mattis mollis ac in risus. Proin gravida erat ac elit tincidunt luctus. Praesent nibh metus, condimentum non dui quis, scelerisque viverra quam. Curabitur suscipit lobortis tellus, eget pulvinar mauris convallis sed. </p>
					<div class="col-lg-3 col-xs-3 col-sm-3 info">
						<div>
							<p>адрес</p>
							<span>Таджикистан,</span><br>
							<span>г. Ходжент,</span><br>
							<span>ул. ХХХХХХХХХХХХХ</span>
						</div>
						<div>
							<p>контактный телефон</p>
							<span>(+992 44) 600-ХХ-ХХ</span><br>
							<span>(+992 44) 600-ХХ-ХХ</span>
						</div>
					</div>
					<div class="col-lg-3 col-xs-3 col-sm-3 info col-lg-offset-2 col-xs-offset-0 col-sm-offset-2">
						<div>
							<p>электронный адрес</p>
							<span>info@asil.tj</span>
						</div>
						<div>
							<p>факс</p>
							<span>(+992 44) 600-ХХ-ХХ</span><br>
							<span>(+992 44) 600-ХХ-ХХ</span>
						</div>
					</div>
					<div class="col-lg-12 col-xs-12 col-sm-12 contact letter">
						<div>
							<h5>Форма обратной связи</h5>
							<form id="write_letter">
								<label><input type="text" name="name"><span>ваше имя</span></label>
								<label><input type="text" name="phone"><span>номер телефона</span></label>
								<label><input type="text" name="email"><span>эл. почта</span></label>
								<label><input type="text" name="message"><span>сообщение</span></label>
								<input type="submit" value="отправить" class="disable">
							</form>
						</div>
					</div>
				</div>
			</div>
		</article>
		<div class="row clients">
			<div class="container">
				<h3>среди наших клиентов</h3>
				<img src="img/brand1.jpg" alt="#">
				<img src="img/brand2.jpg" alt="#">
				<img src="img/brand3.jpg" alt="#">
				<img src="img/brand4.jpg" alt="#">
				<img src="img/brand5.jpg" alt="#">
			</div>
		</div>
		<footer class="row">
			<div class="container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<ul>
						<h5><a href="#">главная</a></h5>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<ul>
						<h5><a href="#">о компании</a></h5>
						<li><a href="#">слово директора</a></li>
						<li><a href="#">отзывы клиентов</a></li>
						<li><a href="#">лицензии</a></li>
						<li><a href="#">команда</a></li>
						<li><a href="#">вакансии</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<ul>
						<h5><a href="#" class="">направления</a></h5>
						<li><a href="#">apolitex</a></li>
						<li><a href="#">apolimerStone</a></li>
						<li><a href="#">astone</a></li>
						<li><a href="#">aporolon</a></li>
						<li><a href="#">aoil</a></li>
						<li><a href="#">abuild</a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 active">
					<h5><a href="" class="active">контактная информация</a></h5>
					<p class="addres">Таджикистан,<br> г. Ходжент,<br> ул. XXXXXXXXXXXXXXXX</p>
					<a href="#" class="look-map"><span>посмотреть на карте</span></a>
					<div class="phone">(+992 44) 600-XX-XX</div>
					<a href="mailto:#" class="email">info@asil.tj</a>
				</div>
			</div>
		</footer>
<?php include("footer.php"); ?>