@extends('layouts.admin')

@section('content')
    {!! Form::model($col,['route'=>['colonias.update',$col->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('Estado:') !!}
        {!! Form::select('id_edo', $states,$col->id_edo,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Nombre de la Colonia:') !!}
        {!! Form::text('nom_col',null,['class'=>'form-control','placeholder'=>'col_carpet']) !!}
    </div>
    {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}

    {!! Form::open(['route'=>['colonias.destroy',$col->id],'method'=>'DELETE']) !!}
    {!! Form::submit('Eliminar',['class'=>'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection