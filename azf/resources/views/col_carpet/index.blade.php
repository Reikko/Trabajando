@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif
@section('content')
    <table class="table">
        <thead>
        <th>ID</th>
        <th>Estado</th>
        <th>Colonia</th>
        </thead>
        @foreach($colonias as $coloni)
            <tbody>
            <td>{{$coloni->id}}</td>
            <td>{{$coloni->nom_edo}}</td>
            <td>{{$coloni->nom_col}}</td>
            <td>
                {!!link_to_route('colonias.edit', $title = 'Editar', $parameters = $coloni->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop