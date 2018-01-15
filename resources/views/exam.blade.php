@extends('layouts.main-layout')

@section('content')
    <section>

        <a href="exam" class="exam" id="examlabel">Экзамен Веб-Технологии</a>


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