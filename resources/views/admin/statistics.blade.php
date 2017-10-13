@extends('layouts.admin-layout')
@section('admincontent')
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
@endsection