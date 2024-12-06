@extends('layouts.admin')

@section('content')
<h1>Детали Ипотеки: {{ $mortgage->title }}</h1>
<p><strong>Процентная ставка:</strong> {{ $mortgage->percent }}%</p>
<p><strong>Минимальная цена:</strong> {{ $mortgage->min_price }}</p>
<p><strong>Максимальная цена:</strong> {{ $mortgage->max_price }}</p>
<p><strong>Минимальный первоначальный взнос:</strong> {{ $mortgage->min_first_payment }}</p>
<p><strong>Максимальный первоначальный взнос:</strong> {{ $mortgage->max_first_payment }}</p>
<p><strong>Минимальный срок:</strong> {{ $mortgage->min_term }} месяцев</p>
<p><strong>Максимальный срок:</strong> {{ $mortgage->max_term }} месяцев</p>
<p><strong>Активна:</strong> {{ $mortgage->is_active ? 'Да' : 'Нет' }}</p>
<a href="{{ route('admin.mortgages.edit', $mortgage->id) }}">Редактировать</a>
@endsection