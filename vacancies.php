<?php include("header.php"); ?>
		<nav class="row">
			<div class="container">
				<div class="row">
					<ul class="list-inline">
						<li class="col-lg-2 col-xs-6 col-sm-3"><a href="/">главная</a></li>
						<li class="col-lg-2 col-xs-6 col-sm-3 col-lg-offset-1"><a href="about.php">о компании </a></li>
						<li class="col-lg-3 col-xs-6 col-sm-3 col-lg-offset-1"><a href="directions.php">направления</a></li>
						<li class="col-lg-2 col-xs-6 col-sm-3 col-lg-offset-1"><a href="contact_information.php">контактная информация</a></li>
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
			<img src="img/slide-child.jpg">
		</div>
		<article class="row">
			<div class="container">
				<div class="breadcrumbs col-lg-10 col-xs-12 col-sm-10 col-lg-offset-2 col-xs-offset-0 col-sm-offset-2"><a href="">главная</a> / <a href="">о компании</a> /</div>
				<h2 class="col-lg-10 col-xs-12 col-sm-10 col-lg-offset-2 col-xs-offset-0 col-sm-offset-2"><span>Вакансии</span></h2>
				<div class="col-lg-2 col-xs-3 col-sm-3 col-md-2">
					<ul class="child">
						<li><a href="">отзывы клиентов</a></li>
						<li><a href="">лицензии</a></li>
						<li><a href="">наши сотрудники</a></li>
						<li><a href="" class="active">вакансии</a></li>
					</ul>
				</div>
				<div class="col-lg-10 col-xs-8 col-xs-offset-1 col-sm-offset-0 col-sm-9 col-md-10">
					<p>Pellentesque ac justo cursus massa mattis mollis ac in risus. Proin gravida erat ac elit tincidunt luctus. Praesent nibh metus, condimentum non dui quis, scelerisque viverra quam. Curabitur suscipit lobortis tellus, eget pulvinar mauris convallis sed. Sed eget leo sagittis, ultrices diam et, aliquet ante. Donec erat tortor, accumsan non eleifend at, blandit a odio. Integer sed nunc scelerisque, varius dolor nec, suscipit leo. Donec rutrum suscipit hendrerit. Integer pharetra egestas pulvinar. Proin porttitor ante enim, sit amet tincidunt enim rhoncus et. Curabitur sodales ultricies ligula, id rhoncus mi consequat quis. Sed faucibus fermentum turpis, nec cursus arcu tristique et. Sed tristique non quam ut tincidunt.</p>					
					<div class="col-lg-12 col-xs-12 col-sm-12 contact letter">
						<div class="vac_div">
							<h5>Подать заявку</h5>
							<form action="action.php" method="GET">
								<label><input type="text" name="name"><span>ваше имя</span></label>
								<label><input type="text" name="phone"><span>номер телефона</span></label>
								<label><input type="text" name="email"><span>эл. почта</span></label>
								<label><input type="file" name="resume"><input type="text" name="resume_in"><span>ваше резюме</span><div>обзор файла</div></label>
								<label><input type="text" name="message"><span>сообщение</span></label>
								<input type="submit" value="отправить">
							</form>
						</div>
					</div>
				</div>
			</div>
		</article>
		<footer class="row">
			<div class="container">
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<ul>
						<h5><a href="#">главная</a></h5>
					</ul>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 active">
					<ul>
						<h5><a href="#">о компании</a></h5>
						<li><a href="#">слово директора</a></li>
						<li><a href="#">отзывы клиентов</a></li>
						<li><a href="#">лицензии</a></li>
						<li><a href="#">команда</a></li>
						<li><a href="#" class="active">вакансии</a></li>
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
				<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
					<h5><a href="">контактная информация</a></h5>
					<p class="addres">Таджикистан,<br> г. Ходжент,<br> ул. XXXXXXXXXXXXXXXX</p>
					<a href="#" class="look-map"><span>посмотреть на карте</span></a>
					<div class="phone">(+992 44) 600-XX-XX</div>
					<a href="mailto:#" class="email">info@asil.tj</a>
				</div>
			</div>
		</footer>
<?php include("footer.php"); ?>