@extends('layouts.main-layout')

@section('content')
                <section>

                    <h2>Севастопольский государственный университет</h2>
                    <h3>Информационные системы и технологии</h3>
                    <p>Перечень изучаемых дисциплин с 1 по 4 семестр:</p>				
                </section>

                <table class="table-study">
                    <tbody>
                        <tr>
                            <td colspan = "9">План учебного процесса</td>
                        </tr>
                        <tr>
                            <td rowspan = "2">№</td>
                            <td rowspan = "2">Дисциплина</td>
                            <td rowspan = "2">Кафедра</td>
                            <td colspan = "6">Всего часов</td>
                        </tr>
                        <tr>
                            <td>Всего</td>
                            <td>Ауд</td>
                            <td>Лк</td>
                            <td>Лб</td>
                            <td>Пр</td>
                            <td>СРС</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td class="tdleft">Экология</td>
                            <td>БЖ</td>
                            <td>54</td>
                            <td>27</td>
                            <td>18</td>
                            <td>0</td>
                            <td>9</td>
                            <td>27</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td class="tdleft">Высшая математика</td>
                            <td>ВМ</td>
                            <td>540</td>
                            <td>282</td>
                            <td>141</td>
                            <td>0</td>
                            <td>141</td>
                            <td>258</td>
                        </tr>					
                        <tr>
                            <td>3</td>
                            <td class="tdleft">Русский язык и культура речи</td>
                            <td>НГиГ</td>
                            <td>108</td>
                            <td>54</td>
                            <td>18</td>
                            <td>0</td>
                            <td>36</td>
                            <td>54</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td class="tdleft">Основы дискретной математики</td>
                            <td>ИС</td>
                            <td>216</td>
                            <td>139</td>
                            <td>87</td>
                            <td>0</td>
                            <td>52</td>
                            <td>77</td>
                        </tr>	
                    <td>5</td>
                    <td class="tdleft"><a href="testpage">Основы программирования и <br/>алгоритмические языки</a></td>
                    <td>ИС</td>
                    <td>405</td>
                    <td>210</td>
                    <td>105</td>
                    <td>87</td>
                    <td>18</td>
                    <td>195</td>
                    </tr>					
                    <tr>
                        <td>6</td>
                        <td class="tdleft">Основы экологии</td>
                        <td>ПЭОП</td>
                        <td>54</td>
                        <td>27</td>
                        <td>18</td>
                        <td>0</td>
                        <td>9</td>
                        <td>27</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td class="tdleft">Теория вероятностей и <br/>математическая статистика</td>
                        <td>ИС</td>
                        <td>162</td>
                        <td>72</td>
                        <td>54</td>
                        <td>18</td>
                        <td>0</td>
                        <td>90</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td class="tdleft">Физика</td>
                        <td>Физики</td>
                        <td>324</td>
                        <td>194</td>
                        <td>106</td>
                        <td>88</td>
                        <td>0</td>
                        <td>130</td>
                    </tr>	
                    <td>9</td>
                    <td class="tdleft">Основы электротехники и <br/>электроники</td>
                    <td>ИС</td>
                    <td>108</td>
                    <td>72</td>
                    <td>36</td>
                    <td>18</td>
                    <td>18</td>
                    <td>36</td>
                    </tr>					
                    <tr>
                        <td>10</td>
                        <td class="tdleft">Численные методы в информатике</td>
                        <td>ИС</td>
                        <td>184</td>
                        <td>89</td>
                        <td>36</td>
                        <td>36</td>
                        <td>17</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td class="tdleft">Методы исследования операций</td>
                        <td>ИС</td>
                        <td>216</td>
                        <td>104</td>
                        <td>52</td>
                        <td>35</td>
                        <td>17</td>
                        <td>112</td>
                    </tr>					
                    </tbody>
                </table>
@endsection