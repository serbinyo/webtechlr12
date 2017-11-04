on_mouse_over = (e) ->
  obj = e.target
  # обрабатываем картинку по over (если требуется)
  if obj.getAttribute('data-active') != '1'
    obj.style.background = 'url(/public/img/img04.jpg) no-repeat left top'
  # обрабатываем раскрытие меню (если требуется)
  if obj.childNodes.length > 0
    i = 0
    while i < obj.childNodes.length
      if obj.childNodes[i].tagName == 'UL'
        ul = obj.childNodes[i]
        ul.style.display = 'block'
      i++
  return

on_mouse_out = (e) ->
  console.log e
  obj = e.target
  # обрабатываем картинку (если требуется)
  if obj.getAttribute('data-active') != '1'
    obj.style.background = 'url(/public/img/img02.jpg) no-repeat left top'
  # обрабатываем скрытие меню (если требуется)
  if obj.childNodes.length > 0
    i = 0
    while i < obj.childNodes.length
      if obj.childNodes[i].tagName == 'UL'
        ul = obj.childNodes[i]
        ul.style.display = 'none'
      i++
  return

check_zero = (s) ->
  s = s + ''
  if s.length == 1
    s = '0' + s
  s

setPageTime = ->
  currentDateObj = document.getElementById('current-date')
  if currentDateObj
    monthList = new Array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря')
    currDate = new Date
    m = monthList[currDate.getMonth()]
    s = check_zero(currDate.getDate()) + ' ' + m + ' ' + Math.round(currDate.getFullYear() % 1000) + ' ' + check_zero(currDate.getHours()) + ':' + check_zero(currDate.getMinutes()) + ':' + check_zero(currDate.getSeconds())
    currentDateObj.innerHTML = s
  setTimeout setPageTime,1000
  return

getCookie = (name) ->
  matches = document.cookie.match(new RegExp('(?:^|; )' + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + '=([^;]*)'))
  if matches then decodeURIComponent(matches[1]) else undefined

setCookie = (name, value, options) ->
  options = options or {}
  expires = options.expires
  if typeof expires == 'number' and expires
    d = new Date
    d.setTime d.getTime() + expires * 1000
    expires = options.expires = d
  if expires and expires.toUTCString
    options.expires = expires.toUTCString()
  value = encodeURIComponent(value)
  updatedCookie = name + '=' + value
  for propName of options
    updatedCookie += '; ' + propName
    propValue = options[propName]
    if propValue != true
      updatedCookie += '=' + propValue
  document.cookie = updatedCookie
  return

updatePagesInfo = (pages) ->
  updated = false
  i = 0
  while i < pages.length
    if pages[i].url == window.location + ''
      pages[i].views++
      updated = true
    i++
  if !updated
    pages.push
      'url': window.location + ''
      'views': 1
  pages

((exports) ->

  InvalidInputHelper = (input, options) ->

    changeOrInput = ->
      @setCustomValidity options.change.call(this, @value)
      return

    invalid = ->
      @setCustomValidity options.change.call(this, @value)
      return

    input.addEventListener 'change', changeOrInput
    input.addEventListener 'input', changeOrInput
    input.addEventListener 'invalid', invalid
    return

  exports.InvalidInputHelper = InvalidInputHelper
  return
) window
document.addEventListener 'DOMContentLoaded', (event) ->
  loc = window.location.pathname
  m = loc.match(/\/([^\/]+)/i)
  if m != null
    curr_page = m[1]
  else
    curr_page = '/'
  nav = document.getElementById('navmenu')
  if nav
    j = 0
    while j < nav.childNodes.length
      if nav.childNodes[j].tagName == 'UL'
        links = nav.childNodes[j].childNodes
        i = 0
        while i < links.length
          if links[i].tagName == 'LI'
            links[i].addEventListener 'mouseenter', on_mouse_over, false
            links[i].addEventListener 'mouseleave', on_mouse_out, false
            innerLinks = links[i].getElementsByTagName('A')
            active = if innerLinks[0].getAttribute('href') == curr_page then '1' else '0'
            links[i].setAttribute 'data-active', active
            if active == '1'
              links[i].style.background = 'url(/public/img/img03.jpg) no-repeat left top'
          i++
        break
      j++
  setPageTime()
  pages = updatePagesInfo(JSON.parse(getCookie('history') or '[]'))
  setCookie 'history', JSON.stringify(pages),
    'expires': 3600
    'path': '/'
  pages = updatePagesInfo(JSON.parse(localStorage.getItem('history') or '[]'))
  localStorage.setItem 'history', JSON.stringify(pages)
  return