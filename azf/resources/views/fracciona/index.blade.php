@extends('layouts.admin')
@if(Session::has('message'))
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        {{Session::get('message')}}
    </div>
@endif

@section('content')
    <table class="table table-condensed table-hover">
        <thead>
        <th>ID</th>
        <th>COLONIA</th>
        <th>FRACCIONAMIENTO</th>
        <th>Editar</th>
        <th>Ver</th>
        </thead>
        @foreach($fracs as $frac)
            <tbody>
            <td>{{$frac->id}}</td>
            <td>{{$frac->nom_col}}</td>
            <td>{{$frac->nom_frac}}</td>
            <td>
                {!!link_to_route('fr.edit', $title = 'Editar', $parameters = $frac->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            <td>
                {!!link_to_route('fr.show', $title = 'Ver', $parameters = $frac->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop