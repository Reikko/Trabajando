@extends('layouts.admin')
@section('content')
    {!! Form::model($fr,['route'=>['fr.update',$fr->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('Estado:') !!}
        {!! Form::select('estate',$est,null,['id'=>'estado_sel','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Colonia:') !!}
        {!! Form::select('id_col',$col,$fr->id_col,['id'=>'colony_sel','class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre del Fraccionamiento:') !!}
        {!! Form::text('nom_frac',null,['class'=>'form-control','placeholder'=>'Ingresa el nombre del Fraccionamiento']) !!}
    </div>
    {!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection

