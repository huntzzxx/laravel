@extends('layouts.main')

@section('title', 'Contato')

@section('content')

    <p><strong>Seu nome é {{ $nome }} e você tem {{ $idade }} anos e você trabalha como
            {{ $profissao }}<strong></p>

    @for ($i = 0; $i < count($array); $i++)
        <p> {{ $array[$i] }} - O valor de i é = {{ $array[$i] }} </p>
    @endfor

    @foreach ($nomes as $nome)
        <p>{{ $nome }}</p>
    @endforeach


@endsection
