<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>
			Главная страница. Сайт Сербина Александра
		</title>
		<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}">
		<script type="text/javascript" src="{{ asset('public/js/main.js') }}">
		</script>

		@yield('links')

	</head>
	<body>
		<div id="wrapper">
			<nav id="navmenu">
				<ul>
					<li><a href="/">Главная</a></li>
					<li><a href="about">Обо мне</a></li>
					<li><a href="interests">Мои интересы</a>
						<ul style="display:none">
							<li><a href="interests#hobby">Мое хобби</a></li>
							<li><a href="interests#books">Мои любимые книги</a></li>
							<li><a href="interests#music">Моя любимые фильмы</a>
							</li>
						</ul>
					</li>
					<li><a href="study">Учеба</a></li>
					<li><a href="testpage">Тест ОПиАЯ</a></li>
					<li><a href="photo">Фотоальбом</a></li>
					<li><a href="contact">Контакт</a></li>
					<li><a href="myblog">Мой блог</a></li>
					<li><a href="guestbook">Гостевая книга</a></li>
				</ul>
			</nav>
			<header>
			</header>
			<main>

				@if(count($errors) > 0)

				<div class="message js-form-message">
					<ul>
						@foreach($errors->all() as $error)
						<li>
							{{$error}}
						</li>
						@endforeach
					</ul>
				</div>

				@endif
				
				<div id="current-date"></div>
				
				@if($user)

				<div class='login_form_container'>
				Пользователь: {{$user->fio}}
				</div>
				
				@endif
				
				@yield('content')
			</main>
		</div>
		<footer>
			<p>
				Copyright &copy; 2017 Serbin Alexandr
			</p>
		</footer>
	</body>
</html>