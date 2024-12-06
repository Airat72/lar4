
@extends('layouts.admin')

@section('content')
<h1>Список Ипотек</h1>
<a href="{{ route('admin.mortgages.create') }}">Добавить Ипотеку</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Название</th>
            <th>Активна</th>
            <th>Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach($mortgages as $mortgage)
        <tr>
            <td>{{ $mortgage->id }}</td>
            <td>{{ $mortgage->title }}</td>
            <td>{{ $mortgage->is_active ? 'Да' : 'Нет' }}</td>
            <td>
                <a href="{{ route('admin.mortgages.edit', $mortgage->id) }}">Редактировать</a>
                <form action="{{ route('admin.mortgages.destroy', $mortgage->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection