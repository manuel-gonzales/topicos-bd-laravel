@csrf
<tr>
    <th>
        Título
    </th>
    <td>
        <input type="text" name="titulo" value="{{ old('titulo',$servicio->titulo) }}"><br>
        {{ $errors->first('titulo') }}
    </td>
</tr>
<tr>
    <th>
        Descripción
    </th>
    <td>
        <input type="text" name="descripcion" value="{{ old('descripcion',$servicio->descripcion) }}"><br>
        {{ $errors->first('descripcion') }}
    </td>
</tr>
<tr>
    <td colspan="2" text-align="center">
        <button>
            {{ $btnText }}
        </button>
    </td>
</tr>