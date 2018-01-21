@extends('layouts.main-layout')

@section('content')
    <section>

        <a href="exam" class="exam" id="examlabel">Экзамен Веб-Технологии</a>

        <table  class="table-study">
            <tr class="topic"><td>Страница</td><td>IP посетителя</td><td>Host посетителя</td><td>Информация о браузере</td><td>Дата посещения</td></tr>
            @foreach($statistics as $statistic)

                <tr>
                    <td>{{$statistic->page}}</td>
                    <td>{{$statistic->ip}}</td>
                    <td>{{$statistic->host}}</td>
                    <td>{{$statistic->browser_name}}</td>
                    <td>{{$statistic->date}}</td>
                </tr>

            @endforeach
        </table>
        {{$statistics->links()}}

        <br><a href="report" class="exam">Посмотреть отчет</a>

    </section>
    <script>
        var link = document.getElementById("examlabel");
        link.addEventListener("mouseover", function () {
            link.firstChild.nodeValue = 'Сербин Александр Александрович';
        }, true);
        link.addEventListener("mouseout", function () {
            link.firstChild.nodeValue = 'Экзамен Веб-Технологии';
        }, true);
    </script>
@endsection