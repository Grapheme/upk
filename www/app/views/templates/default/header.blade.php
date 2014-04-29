<header class="header">
	@if(Request::is('/'))
		<div class="logo"></div>
	@else:
		<a href="{{ url('/') }}" class="logo"></a>
	@endif
	<div class="header-content">
		<div class="top-menu">
			<ul>
				<li class="intranet"><a href="#">Интранет</a></li>
				<ul class="sub-nav">
					<li class="sub-item"><a href="#">Карьера</a>
					<li class="sub-item"><a href="#">Тендеры</a>
					<li class="sub-item"><a href="#">Карта сайта</a>
				</ul>
			</ul>
		</div>
		<nav class="nav">
		<ul>
			<li class="nav-item"><a href="#">Главная</a>
			<li class="nav-item"><a href="#">О компании</a>
			<li class="nav-item"><a href="#">Пресс-центр</a>
			<li class="nav-item"><a href="#">Услуги</a>
			<li class="nav-item"><a href="#">Инвесторам</a></li>
			<ul class="contacts">
				<li class="nav-item"><a href="#">Контакты</a></li>
				<ul class="languages">
				<li class="language"><a href="#">RUS</a>
				<li class="language"><a href="#">ENG</a>
				<li class="language"><a href="#">DE</a>
				</ul>
			</ul>
		</ul>
		</nav>
	</div>
</header>