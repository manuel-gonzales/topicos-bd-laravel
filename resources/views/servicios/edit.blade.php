@extends('layout.layout')

@section('title','Editar servicio')

@section('content')
    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">
                Editar servicio
            </th>
        </tr>
        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('servicios.update',$servicio) }}" method="post">
            @csrf
            @method('PATCH')
            <tr>
                <th>
                    Título
                </th>
                <td>
                    <input type="text" name="titulo" value="{{ old('titulo',$servicio->titulo) }}">
                </td>
            </tr>
            <tr>
                <th>
                    Descripción
                </th>
                <td>
                    <input type="text" name="descripcion" value="{{ old('descripcion',$servicio->descripcion) }}">
                </td>
            </tr>
            <tr>
                <td colspan="2" text-align="center">
                    <button>
                        Actualizar
                    </button>
                </td>
            </tr>
        </form>
    </table>
@endsection