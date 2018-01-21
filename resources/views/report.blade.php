@extends('layouts.main-layout')

@section('content')
    <section>

        <a href="report" class="exam">Обновить</a><br>

        <table  class="table-study">
            <tr class="topic"><td>Страница</td><td>Количество посещений</td></tr>
            @foreach($reports as $key =>$val)

                <tr>
                    <td>{{$key}}</td>
                    <td>{{$val}}</td>
                </tr>

            @endforeach
        </table>

    </section>

@endsection