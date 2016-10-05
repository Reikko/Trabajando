@extends('layouts.admin')
@section('fraccion')
    {!! Form::open(['route'=>'registro.store','method'=>'POST']) !!}

    <h3>Datos del Domicilio</h3>
    <div class="form-group">
        {!! Form::label('Estado:') !!}
        {!! Form::select('estado', ['S' => 'San Luis Potosí', 'Q' => 'Queretaro'], 'S' ,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Fraccionamiento:') !!}
        {!! Form::select('Fr', ['L' => 'Los Almendros', 'J' => 'Juriquilla'], 'L',['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Calle:') !!}
        {!! Form::select('calle', ['L' => 'Una calle', 'S' => 'Otra calle'], null ,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Numero Externo:') !!}
        {!! Form::text('n_ext',null,['class'=>'form-control','placeholder'=>'Numero Externo']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Numero Interno:') !!}
        {!! Form::text('n_int',null,['class'=>'form-control','placeholder'=>'Numero Interno']) !!}
    </div>
@stop

@section('content')
        <h3>Datos del Cliente</h3>
        <div class="form-group">
            {!! Form::label('Nombre:') !!}
            {!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre del Cliente']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Apellido Paterno:') !!}
            {!! Form::text('ap_pat',null,['class'=>'form-control','placeholder'=>'Apellido Paterno']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Apellido Materno:') !!}
            {!! Form::text('ap_mat',null,['class'=>'form-control','placeholder'=>'Apellido Materno']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('Telefono') !!}
            {!! Form::text('tel',null,['class'=>'form-control','placeholder'=>'Telefono']) !!}
        </div>

    {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop

