@extends('layouts.admin')
@section('content')
    {!! Form::open(['route'=>'fr.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('Estado:') !!}
        {!! Form::select('estate',$estados,null,['id'=>'estado_sel','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Colonia:') !!}
        {!! Form::select('id_col',['1'=>'Selecciona un Estado'],null,['id'=>'colony_sel','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre del Fraccionamiento:') !!}
        {!! Form::text('nom_frac',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del Fraccionamiento']) !!}
    </div>
    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection