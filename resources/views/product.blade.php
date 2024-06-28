@extends('layouts.main')

@section('title', 'Contato')

@section('content')

    @if($id != null)
        <p> Exibindo o produto de ID N°: {{ $id }} </p>
    @endif
    
@endsection