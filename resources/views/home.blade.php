@extends('layouts.layout')

@section('title', 'Home')

@section('content')
    <table>
        <tr>
            <td colspan="4">
                Home
            </td>
        </tr>
        <tr>
            <td colspan="4">
                @auth
                    {{ auth()->user()->name }}
                @endauth
            </td>
        </tr>
    </table>
@endsection