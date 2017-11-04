addHideHandler = (sourceId, targetId) ->
  sourceNode = document.getElementById(sourceId)

  handler = ->
    targetNode = document.getElementById(targetId)
    elementStyle = targetNode.style.display
    if elementStyle == 'none'
      targetNode.style.display = 'block'
    else
      targetNode.style.display = 'none'
    return

  sourceNode.onclick = handler
  return

addJQueryHandler = (JQBtnOpenId, JQeditBoxId, $) ->
  $(JQBtnOpenId).click ->
    elementStyle = $(JQeditBoxId).css('display')
    if elementStyle == 'none'
      $(JQeditBoxId).css 'display', 'block'
    else
      $(JQeditBoxId).css 'display', 'none'
    return
  return

sendAjax = (JQSubmitId, JQeditformId, JQeditBoxId, $) ->
  $(JQSubmitId).click (e) ->
    e.preventDefault()
    #информация о происходящем в ассинхронном запросе для пользователя
    $('.wrap_result').css('color', 'green').text('Редактирование публикации').fadeIn 500, ->
      #плавно показываем блок(500мс), затем выполняем функцию
      data = $(JQeditformId).serializeArray()
      $.ajax
        url: $(JQeditformId).attr('action')
        data: data
        type: 'POST'
        headers: 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        datatype: 'JSON'
        success: (html) ->
          if html.error
            $('.wrap_result').css('color', 'red').append('<br/><strong>Заполните все поля</strong>').delay(900).fadeOut 500
          else if html.success
            $('.wrap_result').css('color', 'blue').append('<br/><strong>Публикация отредактирована</strong>').delay(900).fadeOut 500, ->
              $(JQeditBoxId).css 'display', 'none'
              $('#ttl' + html['article']['article_id']).text html['article']['title']
              $('#img' + html['article']['article_id']).attr
                'src': html['article']['image']
                'alt': html['article']['image']
              $('#bdy' + html['article']['article_id']).html html['article']['body']
              return
          return
        error: ->
          $('.wrap_result').css('color', 'red').append('<br/><strong>Ошибка</strong>').delay(900).fadeOut 500
          return
      return
    return
  return

indexator = ($) ->
  addbtn = document.getElementsByClassName('blog_update_link')
  editbox = document.getElementsByClassName('blog_editcontainer')
  editform = document.getElementsByClassName('editform')
  submit = document.getElementsByClassName('edit_submit')
  article = document.getElementsByClassName('blog_container')
  JQeditBoxId = []
  JQeditformId = []
  JQArticleId = []
  JQSubmitId = []
  JQBtnOpenId = []
  i = 0
  while i < addbtn.length
    articleId = article[i].id
    JQArticleId[i] = '#' + articleId
    btnOpenId = addbtn[i].id
    JQBtnOpenId[i] = '#' + btnOpenId
    editboxId = editbox[i].id
    JQeditBoxId[i] = '#' + editboxId
    editformId = editform[i].id
    JQeditformId[i] = '#' + editformId
    submitId = submit[i].id
    JQSubmitId[i] = '#' + submitId
    #addHideHandler(btnOpenId, editboxId);
    addJQueryHandler JQBtnOpenId[i], JQeditBoxId[i], $
    sendAjax JQSubmitId[i], JQeditformId[i], JQeditBoxId[i], $
    i++
  JQArticleId

jQuery(document).ready ($) ->
  ArticleId = indexator($)
  #обработчик для формы добавления НОВОЙ публикации
  $('#addform').on 'click', '#addform-submit', (e) ->
    e.preventDefault()
    #информация о происходящем в ассинхронном запросе для пользователя
    $('.wrap_result').css('color', 'green').text('Сохранение публикации').fadeIn 500, ->
      #плавно показываем блок(500мс), затем выполняем функцию
      data = $('#addform').serializeArray()
      $("#addform")[0].reset();
      $.ajax
        url: $('#addform').attr('action')
        data: data
        type: 'POST'
        headers: 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        datatype: 'JSON'
        success: (html) ->
          if html.error
            $('.wrap_result').css('color', 'red').append('<br/><strong>Заполните все поля</strong>').delay(900).fadeOut 500
          else if html.success
            $('.wrap_result').css('color', 'blue').append('<br/><strong>Публикация сохранена</strong>').delay(900).fadeOut 500, ->
              $('#articles').prepend html.article
              $('input').off()
              $('.blog_update_link').off()
              $(ArticleId[ArticleId.length - 1]).remove()
              ArticleId = indexator($)
              return
          return
        error: ->
          $('.wrap_result').css('color', 'red').append('<br/><strong>Ошибка</strong>').delay(900).fadeOut 500
          return
      return
    return
  return