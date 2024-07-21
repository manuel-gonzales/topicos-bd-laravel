<thead class="table table-bordered">
    <tr>
        <th scope="col" class="{{ setActivo('home') }}"><a href="/">Home</a></th>
        <th scope="col" class="{{ setActivo('nosotros') }}"><a href="/nosotros">Nosotros</a></th>
        <th scope="col" class="{{ setActivo('servicios.index') }}"><a href="/servicios">Servicios</a></th>
        <th scope="col" class="{{ setActivo('contacto') }}"><a href="/contacto">Contacto</a></th>
        @guest
            <th><a href={{ route('login') }}>Login</a></th>
        @else
            <th>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Cerrar sesión
                </a>
            </th>
        @endguest
    </tr>
</thead>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
    @csrf
</form>