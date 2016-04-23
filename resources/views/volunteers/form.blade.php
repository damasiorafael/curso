@extends('layouts.master')

@section('title', 'Form Volunteer')

@section('container')
  <div>
    <h1>Formulário de gerenciamento de Voluntários</h1>
    {!! Form::open(['route' => 'volunteer.send']) !!}
      
      <div class="form-group">
        {!! Form::label('name', 'Nome') !!}
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nome']) !!}
      </div>

      <div class="form-group">
        {!! Form::label('phone', 'Telefone') !!}
        {!! Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Telefone']) !!}
      </div>
      
      <div class="form-group">
        {!! Form::label('email', 'E-mail') !!}
        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) !!}
      </div>
      
      {!! Form::submit('Enviar', ['class' => 'btn btn-default']) !!}
      
    {!! Form::close() !!}
  </div>
@endsection

@section('scripts')
  
  @parent

@endsection