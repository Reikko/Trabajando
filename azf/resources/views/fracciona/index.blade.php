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
        <th>Estado</th>
        <th>Id</th>
        <th>Nombre</th>
        </thead>
        @foreach($fracs as $frac)
            <tbody>
            <td>{{$frac->edo_id}}</td>
            <td>{{$frac->id}}</td>
            <td>{{$frac->nom_fracc}}</td>
            <td>
                {!!link_to_route('fr.edit', $title = 'Editar', $parameters = $frac->id, $attributes = ['class'=>'btn btn-primary'])!!}
            </td>
            </tbody>
        @endforeach
    </table>
@stop