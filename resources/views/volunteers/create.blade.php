@extends('layouts.master')

@section('title', 'Cadastro de Voluntários')

@section('container')

<h1>Cadastro de Voluntários</h1>

{!! Form::open(['route' => 'volunteer.store']) !!}

    <div class="form-group">
      {!! Form::label('name', 'Nome') !!}
      {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
    </div>
    
    <div class="form-group">
      {!! Form::label('phone', 'Telefone') !!}
      {!! Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
    </div>
    
    <div class="form-group">
      {!! Form::label('email', 'Email') !!}
      {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
    </div>
    
    {!! Form::submit('Enviar', ['class' => 'btn btn-default']) !!}
    
{!! Form::close() !!}

<br />
<a href="{{ route('volunteer.index') }}">Voltar para a Lista</a>

@endsection