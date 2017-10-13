<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Админка. Сайт Сербина Александра</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css') }}" />
        <script type="text/javascript" src="{{ asset('public/js/main.js') }}"></script>		
    </head>
    
    @if(!array_key_exists(1,$admins))
    <body>
	<div id="wrapper">
    <div class='blog_alert_container'>
                Файл учетных записей администраторов: ошибка открытия или чтения.<br>
                Доступ закрыт.<br>
                Обратитесь к системному администратору
    </div>
    </div>
    </body>
    
    @elseif(!$admin)
    
    <body>
	<div id="wrapper">
	<div class='login_form_container'>
	<form action="{{route('adminAuthorize')}}" method="post">
		Админ логин: <input type='text' name='admin_login'>
		Админ пароль: <input type='password' name='admin_passwd'>
		<input type='submit' name='go' value='Вход'>
		{{csrf_field()}}
	</form>
	<div style='clear: both'></div>
	</div>
	</div>
    </body>
    
	@else
    
    <body>
		<div id="wrapper">
			<nav id="navmenu">
				<ul>
					<li style="margin-left: 120px;"><a href="admin" target="iframe_a">Админ</a></li>
					<li><a href="admin_blogeditor" target="iframe_a">редактор блога</a></li>
					<li><a href="admin_blogloadfile" target="iframe_a">в Блог из файла</a></li>
					<li><a href="admin_guestbookloadfile" target="iframe_a">в ГК из файла</a></li>
					<li><a href="admin_statistics" target="iframe_a">статистика</a></li>
					<li><a href="admin_history" target="iframe_a">история</a></li>                 
				</ul>
			</nav>

			<header></header>

			<main>
			<div id="current-date"></div>
			<div class='login_form_container'>
            <form action='{{route('adminAuthorize')}}' method='post'>
	            {{$admin}}: вход выполнен <input type='submit' value='Выйти'>
	            {{csrf_field()}}
            </form>
            </div>

			@yield('admincontent')

    		</main>
		</div>
		<footer>
			<p>
				Copyright &copy; 2017 Serbin Alexandr
			</p>
		</footer>
    
    </body>
    
	@endif
</html>
