	jQuery(document).ready(function($)
		{

			var addbtn = document.getElementsByClassName('btnopenblock'),
			comentform = document.getElementsByClassName('comentform'),
			submit = document.getElementsByClassName('submit'),
			comments = document.getElementsByClassName('comment'),
			commentbox = document.getElementsByClassName('comment_body'),
			hashComentformId = [], 
			hashSubmitId = [];
			hashCommentboxId = [];
			//var data = [];
			for (i=0; i< addbtn.length; i++)
			{
				btnOpenId = addbtn[i].id;

				comentformId = comentform[i].id;
				hashComentformId[i] = "#"+comentformId;

				submitId = submit[i].id;
				hashSubmitId[i] = "#"+submitId;

				commentId = comments[i].id
				
				commentboxId = commentbox[i].id;
				hashCommentboxId[i] = "#"+commentboxId;
				
				addHideHandler(btnOpenId, comentformId);


			}
			// далее обработчики для 5 статей. Потому что статьи выводятся по пять на страницу. В случии изменения жлбавить или убрать обработчик
				$(hashComentformId[0]).on('click',hashSubmitId[0],function(e)
				{
					e.preventDefault();

					//определим переменную - выборка элемента для которого в данный момент зарегистрирован обработчик click (кнопка Отправить )
					var comParent = $(this);

					//информация о происходящем в ассинхронном запросе для пользователя
					$('.wrap_result').
						css('color','green').
						text('Сохранение коментария').
						fadeIn(500, function() {         //плавно показываем блок(500мс), затем выполняем функцию
								
						data = $(hashComentformId[0]).serializeArray();
																
						$.ajax({
							
							url: $(hashComentformId[0]).attr('action'),
							data: data,
							type: 'POST',
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							datatype: 'JSON',
							success: function(html) {
								if(html.error) {
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Комментарий пуст</strong>').
									delay(900).
									fadeOut(500);
								}
								else if(html.success){
									$('.wrap_result').
									css('color','blue').
									append('<br/><strong>Комментарий сохранен</strong>').
									delay(900).
									fadeOut(500,function() {										
											$(hashCommentboxId[0]).prepend(html.comment);
											$(hashComentformId[0]).css('display','none');								
									});	
								}								
							},
							error: function() {
								$('.wrap_result').
									css('color','red').
									append('<br/><strong>Ошибка</strong>').
									delay(900).
									fadeOut(500);
							}										
						});								
					});
				});
				
				
				$(hashComentformId[1]).on('click',hashSubmitId[1],function(e)
				{
					e.preventDefault();
					

					//определим переменную - выборка элемента для которого в данный момент зарегистрирован обработчик click (кнопка Отправить )
					var comParent = $(this);

					//информация о происходящем в ассинхронном запросе для пользователя
					$('.wrap_result').
						css('color','green').
						text('Сохранение коментария').
						fadeIn(500, function() {         //плавно показываем блок(500мс), затем выполняем функцию
								
						data = $(hashComentformId[1]).serializeArray();
																
						$.ajax({
							
							url: $(hashComentformId[1]).attr('action'),
							data: data,
							type: 'POST',
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							datatype: 'JSON',
							success: function(html) {
								if(html.error) {
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Комментарий пуст</strong>').
									delay(900).
									fadeOut(500);
								}
								else if(html.success){
									$('.wrap_result').
									css('color','blue').
									append('<br/><strong>Комментарий сохранен</strong>').
									delay(900).
									fadeOut(500,function() {										
											$(hashCommentboxId[1]).prepend(html.comment);
											$(hashComentformId[1]).css('display','none');											
									});		
								}								
							},
							error: function() {
								$('.wrap_result').
									css('color','red').
									append('<br/><strong>Ошибка</strong>').
									delay(900).
									fadeOut(500);
							}										
						});								
					});
				});
				
				$(hashComentformId[2]).on('click',hashSubmitId[2],function(e)
				{
					e.preventDefault();
					

					//определим переменную - выборка элемента для которого в данный момент зарегистрирован обработчик click (кнопка Отправить )
					var comParent = $(this);

					//информация о происходящем в ассинхронном запросе для пользователя
					$('.wrap_result').
						css('color','green').
						text('Сохранение коментария').
						fadeIn(500, function() {         //плавно показываем блок(500мс), затем выполняем функцию
								
						data = $(hashComentformId[2]).serializeArray();
																
						$.ajax({
							
							url: $(hashComentformId[2]).attr('action'),
							data: data,
							type: 'POST',
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							datatype: 'JSON',
							success: function(html) {
								if(html.error) {
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Комментарий пуст</strong>').
									delay(900).
									fadeOut(500);
								}
								else if(html.success){
									$('.wrap_result').
									css('color','blue').
									append('<br/><strong>Комментарий сохранен</strong>').
									delay(900).
									fadeOut(500,function() {										
											$(hashCommentboxId[2]).prepend(html.comment);
											$(hashComentformId[2]).css('display','none');											
									});		
								}								
							},
							error: function() {
								$('.wrap_result').
									css('color','red').
									append('<br/><strong>Ошибка</strong>').
									delay(900).
									fadeOut(500);
							}										
						});								
					});
				});
				
				
				$(hashComentformId[3]).on('click',hashSubmitId[3],function(e)
				{
					e.preventDefault();
					

					//определим переменную - выборка элемента для которого в данный момент зарегистрирован обработчик click (кнопка Отправить )
					var comParent = $(this);

					//информация о происходящем в ассинхронном запросе для пользователя
					$('.wrap_result').
						css('color','green').
						text('Сохранение коментария').
						fadeIn(500, function() {         //плавно показываем блок(500мс), затем выполняем функцию
								
						data = $(hashComentformId[3]).serializeArray();
																
						$.ajax({
							
							url: $(hashComentformId[3]).attr('action'),
							data: data,
							type: 'POST',
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							datatype: 'JSON',
							success: function(html) {
								if(html.error) {
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Комментарий пуст</strong>').
									delay(900).
									fadeOut(500);
								}
								else if(html.success){
									$('.wrap_result').
									css('color','blue').
									append('<br/><strong>Комментарий сохранен</strong>').
									delay(900).
									fadeOut(500,function() {										
											$(hashCommentboxId[3]).prepend(html.comment);
											$(hashComentformId[3]).css('display','none');											
									});		
								}								
							},
							error: function() {
								$('.wrap_result').
									css('color','red').
									append('<br/><strong>Ошибка</strong>').
									delay(900).
									fadeOut(500);
							}										
						});								
					});
				});
				
				
				$(hashComentformId[4]).on('click',hashSubmitId[4],function(e)
				{
					e.preventDefault();
					

					//определим переменную - выборка элемента для которого в данный момент зарегистрирован обработчик click (кнопка Отправить )
					var comParent = $(this);

					//информация о происходящем в ассинхронном запросе для пользователя
					$('.wrap_result').
						css('color','green').
						text('Сохранение коментария').
						fadeIn(500, function() {         //плавно показываем блок(500мс), затем выполняем функцию
								
						data = $(hashComentformId[4]).serializeArray();
																
						$.ajax({
							
							url: $(hashComentformId[4]).attr('action'),
							data: data,
							type: 'POST',
							headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
							datatype: 'JSON',
							success: function(html) {
								if(html.error) {
									$('.wrap_result').
									css('color','red').
									append('<br/><strong>Комментарий пуст</strong>').
									delay(900).
									fadeOut(500);
								}
								else if(html.success){
									$('.wrap_result').
									css('color','blue').
									append('<br/><strong>Комментарий сохранен</strong>').
									delay(900).
									fadeOut(500,function() {										
											$(hashCommentboxId[4]).prepend(html.comment);
											$(hashComentformId[4]).css('display','none');											
									});	
								}								
							},
							error: function() {
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
