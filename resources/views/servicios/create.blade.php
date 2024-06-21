@extends('layout.layout')

@section('title','Crear servicio')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">
                Crear nuevo servicio
            </th>
        </tr>
        @include('partials.validation-errors')
        <form action="{{ route('servicios.store') }}" method="post">
            @include('partials.form', ['btnText' => 'Guardar'])
        </form>
    </table>
@endsection