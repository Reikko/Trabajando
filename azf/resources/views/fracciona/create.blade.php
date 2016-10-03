@extends('layouts.admin')
@section('content')
    {!! Form::open(['route'=>'fr.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::select('state',$estados) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre del Fraccionamiento:') !!}
        {!! Form::text('nom_fracc',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del Fraccionamiento']) !!}
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection