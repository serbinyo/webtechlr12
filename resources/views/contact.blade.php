
<?php
/*
session_start();
Functions::add_guest_statistic();
*/
?>

@extends('layouts.main-layout')

@section('links')

        <link rel="stylesheet" type="text/css" href="../../public/js/jquery-ui-1.9.2/themes/base/jquery.ui.all.css" />
        <script src="../../public/js/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../../public/js/bower_components/jquery-validation/dist/jquery.validate.js"></script>





        <script src="../../public/js/custom.js"></script>		
        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.core.js"></script>
        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.widget.js"></script>


        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.button.js"></script>
        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.mouse.js"></script>
        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.draggable.js"></script>	
        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.position.js"></script>		
        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.resizable.js"></script>
        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.datepicker.js"></script>
        <script src="../../public/js/jquery-ui-1.9.2/ui/i18n/jquery.ui.datepicker-ru.js"></script>
        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.tooltip.js"></script>


        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.dialog.js"></script>

        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.effect.js"></script>
        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.effect-blind.js"></script>
        <script src="../../public/js/jquery-ui-1.9.2/ui/jquery.ui.effect-explode.js"></script>

@endsection

@section('content')

                <div id="current-date"></div>
				
				<?php /*Functions::HelloUser();*/ ?>
				
                <section>	

                    <h3>Форма обратной связи</h3>

                    <form action="{{route('contactSend')}}" method="post"  class="form" id="js-register-form">

                        <div class="form-group">
                            <label class="control-label">Фамилия имя отчество:</label>
                            <div class="form-element">
                                <input type="text" name="fio" value="" class="inp" title="Введите Фамилию Имя Отчество используя кириллицу"/>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group" >
                            <label class="control-label">Пол:</label>
                            <div class="form-element">
                                <label><input type="radio" name="gender" title="Вы мужчина?" value="Мужчина"/> М</label> &nbsp; 
                                <label><input type="radio" name="gender" title="Вы женщина?" value="Женщина"/> Ж</label>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Возраст:</label>
                            <div class="form-element">
                                <select name="form_age" size="1" class="inp" title="Выбирите возраст из выпадающего меню">
                                    <option value="">-</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="33">32</option>
                                    <option value="34">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                    <option value="51">51</option>
                                    <option value="52">52</option>
                                    <option value="53">53</option>
                                    <option value="54">54</option>
                                    <option value="55">55</option>
                                    <option value="56">56</option>
                                    <option value="57">57</option>
                                    <option value="58">58</option>
                                    <option value="59">59</option>
                                    <option value="60">60</option>
                                    <option value="61">61</option>
                                    <option value="62">62</option>
                                    <option value="63">63</option>
                                    <option value="64">64</option>
                                    <option value="65">65</option>
                                    <option value="66">66</option>
                                    <option value="67">67</option>
                                    <option value="68">68</option>
                                    <option value="69">69</option>
                                    <option value="70">70</option>
                                    <option value="71">71</option>
                                    <option value="72">72</option>
                                    <option value="73">73</option>
                                    <option value="74">74</option>
                                    <option value="75">75</option>
                                    <option value="76">76</option>
                                    <option value="77">77</option>
                                    <option value="78">78</option>
                                    <option value="79">79</option>
                                    <option value="80">80</option>
                                    <option value="81">81</option>
                                    <option value="82">82</option>
                                    <option value="83">83</option>
                                    <option value="84">84</option>
                                    <option value="85">85</option>
                                    <option value="86">86</option>
                                    <option value="87">87</option>
                                    <option value="88">88</option>
                                    <option value="89">89</option>
                                    <option value="90">90</option>
                                    <option value="91">91</option>
                                    <option value="92">92</option>
                                    <option value="93">93</option>
                                    <option value="94">94</option>
                                    <option value="95">95</option>						
                                </select>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">E-mail:</label>
                            <div class="form-element">
                                <input type="text" name="form_email" value="" class="inp" title="Введите E-mail в формате example@mail.com"/>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Телефон:</label>
                            <div class="form-element">
                                <input type="text" name="form_tel" value="" class="inp" title="Введите телефон используя только цифры"/>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Дата рождения:</label>
                            <div class="form-element">
                                <input type="text" name="birthday" id="datepicker" value="" title="Кликните на поле и выбирите Вашу дату рождения на календаре" class="inp"/>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Сообщение:</label>
                            <div class="form-element">
                                <textarea name="message" class="inp" rows="5" title="Введите свое сообщение"></textarea>
                            </div>
                            <div class="clr"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">&nbsp;</label>
                            <div class="form-element">
                                <input type="submit" class="form-btn" value="Отправить" />
                                <input type="reset" id="opener" class="form-btn-clear" value="Очистить форму" />
                            </div>
                            <div class="clr"></div>
                        </div>
                        <!--Защита от CSRF атак-->
						{{ csrf_field() }}
						<!--Функция добавляет следующий код на сайт
						<input type="hidden" name="_token" value="kjsgliauehgKLNGFD"/>
						в поле value сохраняется случайная строка и она же сохраняется в сессии.
						Если при отправке строки не равны генерируется исключение
						-->
                    </form>

                    <div id="dialog" title="Требуется подтверждение">
                        <p>Очистить форму, Вы уверены?</p>
                    </div>
                </section>

@endsection