<!-- Heading -->
<h6 class="navbar-heading text-muted">Gestionar datos</h6>
<!-- Navigation (menu lateral izquierdo)-->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="ni ni-tv-2 text-red"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/estado') }}"><i class="fas fa-sign"></i>
            Estados
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/localidad') }}">
            <i class="fas fa-search-location"></i></i> Localidad
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/municipio') }}">
            <i class="fas fa-building"></i> Municipios
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}">
            <i class="fas fa-city"></i>Colonias
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/codigoPostal') }}">
            <i class="fas fa-mail-bulk"></i> Codigo postal
        </a>
    </li>
    <li class="nav-item">
        <!-- Cuando hagamos clic se va activar un evento para que no se actualice la pagina y accedemos al elemento que tenga un ID determinado para finalmente hacer submit de dicho elemento -->
        <a class="nav-link" href="" onclick="event.preventDefault(); document.getElementById('formLogout').submit();">
            <i class="ni ni-key-25"></i> Cerrar sesión
        </a>
        <!-- Para cerrar sesión debemos de hacer una petición tipo POST -->
        <form action="{{ route('logout') }}" method="POST" style="display: none;" id="formLogout">
            <!-- Como es una peticion de tipo POST tenemos que incluir un token @csrf -->
            @csrf
        </form>
    </li>
</ul>
<!-- Divider -->
{{-- <hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">Reportes</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-sound-wave text-yellow"></i> Frecuencia de citas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="ni ni-spaceship text-red"></i> Médicos más activos
        </a>
    </li>
</ul> --}}