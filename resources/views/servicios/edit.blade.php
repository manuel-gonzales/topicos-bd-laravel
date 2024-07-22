@extends('layouts.layout')

@section('title','Editar servicio')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            @auth
            <th colspan="4">
                Editar servicio
            </th>
            @endauth
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('servicios.update', $servicio) }}" method="POST">
            @method('PATCH')
            @include('partials.form', ['btnText' => 'Actualizar'])
        </form>
    </table>
@endsection