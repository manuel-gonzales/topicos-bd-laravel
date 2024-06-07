@extends('layout.layout')

@section('title', 'Servicio | '.$servicio->titulo)

@section('content')
    <table class="table">
        <tr>
            <td colspan="4">
                {{ $servicio->titulo }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                {{ $servicio->descripcion }}
            </td>
        </tr>
        <tr>
            <td colspan="4">
                {{ $servicio->created_at->diffForHumans() }}
            </td>
        </tr>
    </table>
@endsection