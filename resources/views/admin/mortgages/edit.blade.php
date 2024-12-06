@extends('layouts.admin')

@section('content')
<h1>Редактировать Ипотеку</h1>
<form action="{{ route('admin.mortgages.update', $mortgage->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Название:</label>
    <input type="text" name="title" value="{{ $mortgage->title }}" required>
    
    <label for="description">Описание:</label>
    <textarea name="description">{{ $mortgage->description }}</textarea>
    
    <label for="percent">Процент:</label>
    <input type="number" name="percent" value="{{ $mortgage->percent }}" max="40" required>
    
    <label for="min_first_payment">Минимальный первоначальный взнос:</label>
    <input type="number" name="min_first_payment" value="{{ $mortgage->min_first_payment }}" max="98" required>
    
    <label for="max_price">Максимальная цена:</label>
    <input type="number" step="0.01" name="max_price" value="{{ $mortgage->max_price }}" required>
    
    <label for="min_price">Минимальная цена:</label>
    <input type="number" step="0.01" name="min_price" value="{{ $mortgage->min_price }}" required>
    
    <label for="min_term">Минимальный срок:</label>
    <input type="number" name="min_term" value="{{ $mortgage->min_term }}" required>
    
    <label for="max_term">Максимальный срок:</label>
    <input type="number" name="max_term" value="{{ $mortgage->max_term }}" required>
    
    <label for="is_active">Активна:</label>
    <input type="checkbox" name="is_active" {{ $mortgage->is_active ? 'checked' : '' }}>
    
    <button type="submit">Обновить</button>
</form>
@endsection