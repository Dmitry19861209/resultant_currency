@extends('layouts.app')

@section('content')
    {{ csrf_field() }}
    {{--{{ dd($currencies) }}--}}
    <h2>Список валют</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Название валюты</th>
                <th scope="col">Цена</th>
                <th scope="col">Количество</th>
            </tr>
        </thead>
        <tbody>
            @foreach($currencies as $key => $currency)
                <tr>
                    <td scope="row">{{ $key }}</td>
                    <td>{{ $currency->name }}</td>
                    <td>{{ $currency->volume }}</td>
                    <td>{{ $currency->price->amount }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection