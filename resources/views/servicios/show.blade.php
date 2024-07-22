@extends('layouts.layout')

@section('title', 'Servicio | '.$servicio->titulo)

@section('content')
    <table class="table">
        @auth
        <tr>
            <td colspan="2">
                {{ $servicio->titulo }}
                <a href="{{ route('servicios.edit', $servicio) }}">
                    Editar
                </a>
            </td>
            <td colspan="2">
                <form action="{{ route('servicios.destroy', $servicio) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        @endauth
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