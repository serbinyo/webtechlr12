jQuery(document).ready(function($)
	{

		var addbtn = document.getElementsByClassName('blog_update_link'),
		editbox = document.getElementsByClassName('blog_editcontainer'),
		editform = document.getElementsByClassName('editform'),
		submit = document.getElementsByClassName('edit_submit'),
		article = document.getElementsByClassName('blog_container'),
		hasheditBoxId = [],
		hasheditformId = [],
		hashArticleId = [],
		hashSubmitId = [];



		for (i=0; i< addbtn.length; i++)
		{
			articleId = article[i].id;
			hashArticleId[i] = "#"+articleId;

			btnOpenId = addbtn[i].id;
			editboxId = editbox[i].id;
			hasheditBoxId[i] = "#"+editboxId;

			editformId = editform[i].id;
			hasheditformId[i] = "#"+editformId;

			submitId = submit[i].id;
			hashSubmitId[i] = "#"+submitId;

			addHideHandler(btnOpenId, editboxId);
		}





		//обработчик для формы добавления НОВОЙ публикации
		$('#addform').on('click','#addform-submit',function(e)
			{
				e.preventDefault();
				//информация о происходящем в ассинхронном запросе для пользователя
				$('.wrap_result').
				css('color','green').
				text('Сохранение публикации').
				fadeIn(500, function()
					{
						//плавно показываем блок(500мс), затем выполняем функцию

						data = $('#addform').serializeArray();

						$.ajax(
							{

								url: $('#addform').attr('action'),
								data: data,
								type: 'POST',
								headers:
								{
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								},
								datatype: 'JSON',
								success: function(html)
								{
									if(html.error)
									{
										$('.wrap_result').
										css('color','red').
										append('<br/><strong>Заполните все поля</strong>').
										delay(900).
										fadeOut(500);
									}
									else if(html.success)
									{
										$('.wrap_result').
										css('color','blue').
										append('<br/><strong>Публикация сохранена</strong>').
										delay(900).
										fadeOut(500,function()
											{
												document.location.reload(true);
												//$('#articles').prepend(html.article);
												//$(hashArticleId[4]).remove();

											});
									}
								},
								error: function()
								{
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Ошибка</strong>').
									delay(900).
									fadeOut(500);
								}
							});
					});
			});

		$(hasheditformId[0]).on('click',hashSubmitId[0],function(e)
			{
				e.preventDefault();
				//информация о происходящем в ассинхронном запросе для пользователя
				$('.wrap_result').
				css('color','green').
				text('Редактирование публикации').
				fadeIn(500, function()
					{
						//плавно показываем блок(500мс), затем выполняем функцию

						data = $(hasheditformId[0]).serializeArray();

						$.ajax(
							{
								url: $(hasheditformId[0]).attr('action'),
								data: data,
								type: 'POST',
								headers:
								{
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								},
								datatype: 'JSON',
								success: function(html)
								{
									if(html.error)
									{
										$('.wrap_result').
										css('color','red').
										append('<br/><strong>Заполните все поля</strong>').
										delay(900).
										fadeOut(500);
									}
									else if(html.success)
									{
										$('.wrap_result').
										css('color','blue').
										append('<br/><strong>Публикация отредактирована</strong>').
										delay(900).
										fadeOut(500,function()
											{
												$(hasheditBoxId[0]).css('display','none');
												$('#ttl'+html['article']['article_id']).text(html['article']['title']);
												$('#img'+html['article']['article_id']).attr({'src':html['article']['image'],'alt':html['article']['image']});
												$('#bdy'+html['article']['article_id']).text(html['article']['body']);
											});
									}
								},
								error: function()
								{
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Ошибка</strong>').
									delay(900).
									fadeOut(500);
								}
							});
					});
			});
			
			$(hasheditformId[1]).on('click',hashSubmitId[1],function(e)
			{
				e.preventDefault();
				//информация о происходящем в ассинхронном запросе для пользователя
				$('.wrap_result').
				css('color','green').
				text('Редактирование публикации').
				fadeIn(500, function()
					{
						//плавно показываем блок(500мс), затем выполняем функцию

						data = $(hasheditformId[1]).serializeArray();

						$.ajax(
							{
								url: $(hasheditformId[1]).attr('action'),
								data: data,
								type: 'POST',
								headers:
								{
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								},
								datatype: 'JSON',
								success: function(html)
								{
									if(html.error)
									{
										$('.wrap_result').
										css('color','red').
										append('<br/><strong>Заполните все поля</strong>').
										delay(900).
										fadeOut(500);
									}
									else if(html.success)
									{
										$('.wrap_result').
										css('color','blue').
										append('<br/><strong>Публикация отредактирована</strong>').
										delay(900).
										fadeOut(500,function()
											{
												$(hasheditBoxId[1]).css('display','none');
												$('#ttl'+html['article']['article_id']).text(html['article']['title']);
												$('#img'+html['article']['article_id']).attr({'src':html['article']['image'],'alt':html['article']['image']});
												$('#bdy'+html['article']['article_id']).text(html['article']['body']);
											});
									}
								},
								error: function()
								{
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Ошибка</strong>').
									delay(900).
									fadeOut(500);
								}
							});
					});
			});
			
			$(hasheditformId[2]).on('click',hashSubmitId[2],function(e)
			{
				e.preventDefault();
				//информация о происходящем в ассинхронном запросе для пользователя
				$('.wrap_result').
				css('color','green').
				text('Редактирование публикации').
				fadeIn(500, function()
					{
						//плавно показываем блок(500мс), затем выполняем функцию

						data = $(hasheditformId[2]).serializeArray();

						$.ajax(
							{
								url: $(hasheditformId[2]).attr('action'),
								data: data,
								type: 'POST',
								headers:
								{
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								},
								datatype: 'JSON',
								success: function(html)
								{
									if(html.error)
									{
										$('.wrap_result').
										css('color','red').
										append('<br/><strong>Заполните все поля</strong>').
										delay(900).
										fadeOut(500);
									}
									else if(html.success)
									{
										$('.wrap_result').
										css('color','blue').
										append('<br/><strong>Публикация отредактирована</strong>').
										delay(900).
										fadeOut(500,function()
											{
												$(hasheditBoxId[2]).css('display','none');
												$('#ttl'+html['article']['article_id']).text(html['article']['title']);
												$('#img'+html['article']['article_id']).attr({'src':html['article']['image'],'alt':html['article']['image']});
												$('#bdy'+html['article']['article_id']).text(html['article']['body']);
											});
									}
								},
								error: function()
								{
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Ошибка</strong>').
									delay(900).
									fadeOut(500);
								}
							});
					});
			});
			
			$(hasheditformId[3]).on('click',hashSubmitId[3],function(e)
			{
				e.preventDefault();
				//информация о происходящем в ассинхронном запросе для пользователя
				$('.wrap_result').
				css('color','green').
				text('Редактирование публикации').
				fadeIn(500, function()
					{
						//плавно показываем блок(500мс), затем выполняем функцию

						data = $(hasheditformId[3]).serializeArray();

						$.ajax(
							{
								url: $(hasheditformId[3]).attr('action'),
								data: data,
								type: 'POST',
								headers:
								{
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								},
								datatype: 'JSON',
								success: function(html)
								{
									if(html.error)
									{
										$('.wrap_result').
										css('color','red').
										append('<br/><strong>Заполните все поля</strong>').
										delay(900).
										fadeOut(500);
									}
									else if(html.success)
									{
										$('.wrap_result').
										css('color','blue').
										append('<br/><strong>Публикация отредактирована</strong>').
										delay(900).
										fadeOut(500,function()
											{
												$(hasheditBoxId[3]).css('display','none');
												$('#ttl'+html['article']['article_id']).text(html['article']['title']);
												$('#img'+html['article']['article_id']).attr({'src':html['article']['image'],'alt':html['article']['image']});
												$('#bdy'+html['article']['article_id']).text(html['article']['body']);
											});
									}
								},
								error: function()
								{
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Ошибка</strong>').
									delay(900).
									fadeOut(500);
								}
							});
					});
			});
			
			$(hasheditformId[4]).on('click',hashSubmitId[4],function(e)
			{
				e.preventDefault();
				//информация о происходящем в ассинхронном запросе для пользователя
				$('.wrap_result').
				css('color','green').
				text('Редактирование публикации').
				fadeIn(500, function()
					{
						//плавно показываем блок(500мс), затем выполняем функцию

						data = $(hasheditformId[4]).serializeArray();

						$.ajax(
							{
								url: $(hasheditformId[4]).attr('action'),
								data: data,
								type: 'POST',
								headers:
								{
									'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
								},
								datatype: 'JSON',
								success: function(html)
								{
									if(html.error)
									{
										$('.wrap_result').
										css('color','red').
										append('<br/><strong>Заполните все поля</strong>').
										delay(900).
										fadeOut(500);
									}
									else if(html.success)
									{
										$('.wrap_result').
										css('color','blue').
										append('<br/><strong>Публикация отредактирована</strong>').
										delay(900).
										fadeOut(500,function()
											{
												$(hasheditBoxId[4]).css('display','none');
												$('#ttl'+html['article']['article_id']).text(html['article']['title']);
												$('#img'+html['article']['article_id']).attr({'src':html['article']['image'],'alt':html['article']['image']});
												$('#bdy'+html['article']['article_id']).text(html['article']['body']);
											});
									}
								},
								error: function()
								{
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Ошибка</strong>').
									delay(900).
									fadeOut(500);
								}
							});
					});
			});
	});

function addHideHandler(sourceId, targetId)
{
	var sourceNode = document.getElementById(sourceId)
	var handler = function()
	{
		var targetNode = document.getElementById(targetId)
		var elementStyle = targetNode.style.display;
		if (elementStyle === 'none')
		targetNode.style.display = 'block'
		else
		targetNode.style.display = 'none'
	}
	sourceNode.onclick = handler
}
