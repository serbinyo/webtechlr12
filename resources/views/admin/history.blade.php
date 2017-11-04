@extends('layouts.admin-layout')
@section('admincontent')
<section>
	<h1>
		История просмотра
	</h1>
	<h3>
		История текущего сеанса
	</h3>
	<table class="table-history" >
		<thead>
			<tr>
				<th>
					Страница
				</th>
				<th>
					Просмотров
				</th>
			</tr>
		</thead>
		<tbody  id="tbody-session">
		</tbody>
	</table><br/>
	<button id="mybutton">
		Очистить историю сеанса
	</button>

	<h3>
		История за всё время
	</h3>
	<table class="table-history">
		<thead>
			<tr>
				<th>
					Страница
				</th>
				<th>
					Просмотров
				</th>
			</tr>
		</thead>
		<tbody id="tbody-all">
		</tbody>
	</table>


</section>

<script type="text/javascript">
	function showHistory(elementId, pages)
	{
		var elem = document.getElementById(elementId);
		if (!elem)
		return false;

		for (var i = 0; i < pages.length; i++)
		{
			var tr = document.createElement('TR');
			var td1 = document.createElement('TD');
			td1.innerHTML = pages[i].url;
			tr.appendChild(td1);
			var td2 = document.createElement('TD');
			td2.innerHTML = pages[i].views;
			tr.appendChild(td2);
			elem.appendChild(tr);
		}
	}

	document.getElementById('mybutton').onclick = function ()
	{
		localStorage.clear();
		location.reload();
	}


	document.addEventListener("DOMContentLoaded", function (event)
		{
			var allPages = JSON.parse(getCookie('history') || '[]');
			var sessionPages = JSON.parse(localStorage.getItem('history') || '[]');

			showHistory('tbody-session', sessionPages);
			showHistory('tbody-all', allPages);
		});
    getCookie = function(name) {
        var matches;
        matches = document.cookie.match(new RegExp('(?:^|; )' + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)'));
        if (matches) {
            return decodeURIComponent(matches[1]);
        } else {
            return void 0;
        }
    };

    setCookie = function(name, value, options) {
        var d, expires, propName, propValue, updatedCookie;
        options = options || {};
        expires = options.expires;
        if (typeof expires === 'number' && expires) {
            d = new Date;
            d.setTime(d.getTime() + expires * 1000);
            expires = options.expires = d;
        }
        if (expires && expires.toUTCString) {
            options.expires = expires.toUTCString();
        }
        value = encodeURIComponent(value);
        updatedCookie = name + '=' + value;
        for (propName in options) {
            updatedCookie += '; ' + propName;
            propValue = options[propName];
            if (propValue !== true) {
                updatedCookie += '=' + propValue;
            }
        }
        document.cookie = updatedCookie;
    };
</script>
@endsection

