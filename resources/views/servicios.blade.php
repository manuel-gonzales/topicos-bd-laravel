@extends('layouts.layout')

@section('title', 'Servicios')

@section('content')
    <h2>Servicios</h2>
    <table class="table">
        <tbody>
            <tr>
                <td colspan="4">
                    <a href="{{ route('servicios.create') }}">
                        Nuevo servicio
                    </a>
                </td>
            </tr>
            <tr>
                <th colspan="4">
                    Listado de Servicios
                </th>
            </tr>
            <tr>
                @if($servicios)
                    @foreach($servicios as $servicio)
                        <tr>
                            <td colspan="4">
                                <a href="{{ route('servicios.show', $servicio) }}">
                                    {{ $servicio->titulo }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <p>No existe ningún servicio que mostrar.</p>
                @endif
            </tr>
        </tbody>
    </table>
@endsection