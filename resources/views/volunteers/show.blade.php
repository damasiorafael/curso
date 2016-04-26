@extends('layouts.master')

@section('title', 'Voluntários')

@section('container')

<h1>Detalhes Voluntário</h1>

<p>Nome: {{$volunteer->name}}</p>
<p>Telefone: {{$volunteer->phone}}</p>
<p>Email: {{$volunteer->email}}</p>

<a href="{{ route('volunteer.index') }}">Voltar para a Lista</a>

@endsection