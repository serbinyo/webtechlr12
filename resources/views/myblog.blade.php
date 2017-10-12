
<?php
/*session_start();
Functions::add_guest_statistic();*/
?>

@extends('layouts.main-layout')

@section('links')
<script type="text/javascript" src="../../public/js/jq/jquery.js">
</script>

<script>
	jQuery(document).ready(function()
		{
			var addbtn = document.getElementsByClassName('btnopenblock'),
			boxadd = document.getElementsByClassName('addbox'),
			btnsend = document.getElementsByClassName('btnsend'),
			comments = document.getElementsByClassName('comment');
			for (i=0; i< addbtn.length; i++){
				btnOpenId = addbtn[i].id;
				boxId = boxadd[i].id;
				btnSendId = btnsend[i].id;
				commentId = comments[i].id
				addHideHandler(btnOpenId, boxId);
				sendComment(btnSendId, commentId, boxId);
				//submitOff(boxId, commentId ,btnSendId);
				

			}
			
		});
		
	function submitOff(boxId, commentId, inputBtn){
		var btn = '#'+inputBtn;
		var form = '#'+boxId;
		jQuery('form').on('click',btn,function(e) {
		alert (btn);
		e.preventDefault();
		});
	}	
		
	function addHideHandler(sourceId, targetId) {
		var sourceNode = document.getElementById(sourceId)
		var handler = function() {
			var targetNode = document.getElementById(targetId)
			var elementStyle = targetNode.style.display;
			if (elementStyle === 'none')
			targetNode.style.display = 'block'
			else
			targetNode.style.display = 'none'
		}
		sourceNode.onclick = handler
	}
	
	function sendComment(buttonId, commentId, boxId){
		var buttonNode = document.getElementById(buttonId);
	 	var formId = '#'+boxId;
		var handler = function() {
			var comment = document.getElementById(commentId).value.replace(/<[^>]+>/g, '');
			jQuery.ajax({
					url: jQuery(formId).attr('action'),
					data: {text: comment},
					type: 'POST',
					dataType: "JSON",
					success: function () {
						alert('Удача');
					},
					error: function(){
						alert('Ошибка');
					}			
				});
		}
		buttonNode.onclick = handler
	}

	function drawComments(i, comment)
	{
		for (j = 0; j < comment.length; j++)
		{
			document.getElementById('commentsblock' + i).innerHTML += comment[j];
			document.getElementById('commentsblock' + i).innerHTML += '<hr>';
		}
	}
</script>

@endsection

@section('content')
@foreach($articles as $article)

<div class='blog_container'>
	<div class='blog_title'>
		<h3>
			{{$article->title}}
		</h3>
	</div>
	<div class='blog_image'>
		<img src='{{$article->image}}' width='250' alt='{{$article->image}}'/>
	</div>
	<div class='blog_body'>
		{{$article->body}}
	</div>
	<div class='blog_date'>
		Дата публикации: {{$article->date}}
	</div>

	<div class='blog_body'>
		Комментарии:<hr>
		@foreach ($comments as $comment)
		@if ($article->id === $comment->blogid)
		{{$comment->date}}
		{{$comment->author}}
		написал: {{$comment->body}}<hr>
		@endif
		@endforeach
		<button id='btnaddcmnt{{$article->id}}' class="btnopenblock">
			Комментировать
		</button><br>
		<form id="cmntform{{$article->id}}" action="{{ route('comment.store')}}" method="post" class="addbox" style='display: none'>
			<textarea id='comment{{$article->id}}' class="comment" cols='30' rows='10'>
			</textarea><div id="information"></div><br>
			<input class="btnsend" type="submit" id="submit{{$article->id}}" value="Отправить" />
			{{csrf_field()}}
		</form>
	</div>
</div>
@endforeach

{{$articles->links()}}

<?php
/*Functions::HelloUser();

//s количество записей, выводимых на странице
$per_page = 5;
// получаем номер страницы
$page = (int) (isset($_GET['page']) ? ($_GET['page'] - 1) : 0);
// вычисляем первый операнд для LIMIT
$start = abs($page * $per_page);

// выполняем запрос и выводим записи
$query = "SELECT * FROM blog ORDER BY date DESC LIMIT $start, $per_page";

$index = 1;
$addCommentsOpt = false;
$userid = Functions::findUser();
if (!empty($userid)) {
$addCommentsOpt = true;

$user = UsersModel::find($userid);
}

BaseActiveRecord::check_connection();
foreach (BaseActiveRecord::$pdo->query($query) as $i => $blog) {

if (empty($blog['image'])) {
$blog['image'] = '../../public/assets/img/noimage.jpg';
}

echo '
<div class="blog_container">
	';
	echo "
	<div class='blog_title'>
		<h3>
			" . $blog['title'] . "
		</h3>
	</div>";
	echo "
	<div class='blog_image'>
		<img src='" . $blog['image'] . "'  width='250' alt='" . $blog['image'] . "'/>
	</div>";
	echo "
	<div class='blog_body'>
		" . $blog['body'] . "
	</div>";
	echo "
	<div class='blog_date'>
		Дата публикации: " . $blog['date'] . "
	</div>";

	//находим и выводим комменты
	echo "
	<div class='blog_body'>
		Комментарии:<hr>
		<div id='commentsblock$index'>
		</div>";
		$cmntqry = "SELECT * FROM comments WHERE blogid = '" . $blog['id'] . "' ORDER BY date DESC";
		?>
		<script>
			var data = [];
		</script>
		<?php
		foreach (BaseActiveRecord::$pdo->query($cmntqry) as $с => $comment) {
		$cmnt = $comment['date'] . ' ' . $comment['author'] . ' написал: ' . $comment['body'];
		?>
		<script>
			data.push('<?php echo $cmnt; ?>');
		</script>
		<?php
		}
		?>
		<script>
			drawComments('<?php echo $index; ?>', data);
		</script>
		<?php
		//дальше вывод для авторизованных пользователей
		if ($addCommentsOpt) {
		echo "
		<button id='btnaddcmnt$index'>
			Комментировать
		</button><br>
		<div id='cmntblock$index' style='display: none'>
			<textarea id='comment$index' cols='30' rows='10'>
			</textarea><br>
			<button id='button$index'>
				Отправить
			</button>
		</div>";
		?>
		<script>
			var button<?php echo $index ?> = document.getElementById('button<?php echo $index ?>'),
			btnaddcmnt<?php echo $index ?> = document.getElementById('btnaddcmnt<?php echo $index ?>'),
			xmlhttp = new XMLHttpRequest();

			button<?php echo $index ?>.addEventListener('click', function ()
				{
					var name<?php echo $index ?> = '<?php echo $user->login ?>',
					comment<?php echo $index ?> = document.getElementById('comment<?php echo $index ?>').value.replace(/<[^>]+>/g, ''),
					blogid<?php echo $index ?> = <?php echo $blog['id'] ?>;
					if (name<?php echo $index ?> === '' || comment<?php echo $index ?> === '')
					{
						alert('Заполните все поля!');
						return false;
					} else
					{
						xmlhttp.open('post', 'addcomment', true);
						xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
						xmlhttp.send("name=" + encodeURIComponent(name<?php echo $index ?>) + "&comment=" + encodeURIComponent(comment<?php echo $index ?>) + "&blogid=" + encodeURIComponent(blogid<?php echo $index ?>));
						document.getElementById('comment<?php echo $index ?>').value = '';
						//выведем комментарии
						xmlhttp.onreadystatechange = function ()
						{
							if (xmlhttp.readyState == 4)
							{
								if (xmlhttp.status == 200)
								{
									var data = xmlhttp.responseText;
									if (data !== 'empty')
									{
										data = JSON.parse(data);
										document.getElementById('commentsblock' + <?php echo $index; ?>).innerHTML = '';
										drawComments('<?php echo $index; ?>', data);
										var x = document.getElementById('cmntblock<?php echo $index ?>');
										x.style.display = 'none';
									} else
									{
										alert("empty");
									}
								}
							}
						};
					}
				});

			btnaddcmnt<?php echo $index ?>.addEventListener('click', function ()
				{
					var x = document.getElementById('cmntblock<?php echo $index ?>'),
					css = x.style.display;
					if (css == 'none')
					{
						x.style.display = 'block';
					}else
					{
						x.style.display = 'none';
					}
				});


		</script>
		<?php
		}
		echo '
	</div>
</div>';
$index++;
}
// выводим ссылки на страницы:
$query = "SELECT count(*) FROM blog";
$total_rows = BaseActiveRecord::$pdo->query($query)->fetchColumn();

// Определяем общее количество страниц
$num_pages = ceil($total_rows / $per_page);

echo '
<p>
	Страницы: ';
	for ($i = 1; $i <= $num_pages; $i++) {
	// текущую страницу выводим без ссылки
	if ($i - 1 == $page) {
	echo $i . " ";
	} else {
	echo '
	<a href="myblog?page=' . $i . '">
		' . $i . "
	</a>";
	}
	}
	echo '
</p>';
*/
?>





@endsection