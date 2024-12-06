@extends('layouts.public')

@section('content')
<h1>Список Ипотек</h1>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Процент</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mortgages as $mortgage)
        @if($mortgage->is_active)
        <tr>
            <td>{{ $mortgage->id }}</td>
            <td>{{ $mortgage->title }}</td>
            <td>{{ $mortgage->percent }}%</td>
            <td><a href="{{ route('public.mortgages.show', $mortgage->id) }}">Просмотреть</a></td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@endsection