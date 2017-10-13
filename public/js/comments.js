jQuery(document).ready(function()
	{
		var addbtn = document.getElementsByClassName('btnopenblock'),
		comentform = document.getElementsByClassName('comentform'),
		btnsend = document.getElementsByClassName('btnsend'),
		comments = document.getElementsByClassName('comment');
		for (i=0; i< addbtn.length; i++)
		{
			btnOpenId = addbtn[i].id;
			comentformId = comentform[i].id;
			btnSendId = btnsend[i].id;
			commentId = comments[i].id
			addHideHandler(btnOpenId, comentformId);
			sendComment(btnSendId, commentId, comentformId);
			submitOff(comentformId, commentId ,btnSendId);


		}

	});

function submitOff(comentformId, commentId, inputBtn)
{
	var btn = '#'+inputBtn;
	var form = '#'+comentformId;
	jQuery('form').on('click',btn,function(e)
		{
			alert (btn);
			e.preventDefault();
		});
}

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

function sendComment(buttonId, commentId, comentformId)
{
	var buttonNode = document.getElementById(buttonId);
	var formId = '#'+comentformId;
	var handler = function()
	{
		var comment = document.getElementById(commentId).value.replace(/<[^>]+>/g, '');
		jQuery.ajax(
			{
				url: jQuery(formId).attr('action'),
				data:
				{
					text: comment
				},
				type: 'POST',
				dataType: "JSON",
				success: function ()
				{
					alert('Удача');
				},
				error: function()
				{
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