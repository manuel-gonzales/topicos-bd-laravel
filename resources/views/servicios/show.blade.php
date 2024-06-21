@extends('layout.layout')

@section('title', 'Servicio | '.$servicio->titulo)

@section('content')
    <table class="table">
        <tr>
            <td colspan="4">
                {{ $servicio->titulo }}
                <a href="{{ route('servicios.edit',$servicio) }}">Editar</a>
            </td>
        </tr>
        <tr>
            <td colspan="4">
                {{ $servicio->descripcion }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                Servicio creado {{ $servicio->created_at->diffForHumans() }}
            </td>
        </tr>
    </table>
@endsection