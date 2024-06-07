@extends('layout.layout')

@section('title', 'Servicios')

@section('content')
    <h2>Servicios</h2>
    <table class="table">
        <tbody>
            <tr>
                @if($servicios)
                    @foreach($servicios as $item)
                        <td>
                            <a href="{{ route('servicios.show', $item) }}">
                                {{ $item->titulo }}
                            </a>
                        </td>
                    @endforeach
                @else
                    <p>No existe ningún servicio que mostrar.</p>
                @endif
            </tr>
            <tr>
                <td colspan="4">
                    {{ $servicios->links('pagination::bootstrap-4') }}
                </td>
            </tr>
        </tbody>
    </table>
@endsection