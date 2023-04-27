<!-- Heading -->
<h6 class="navbar-heading text-muted">Importar datos</h6>
<!-- Navigation (menu lateral izquierdo)-->
<ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="/home">
            <i class="ni ni-tv-2 text-red"></i> Dashboard
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('estados')) || (request()->is('estados/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('estados') }}">
            <i class="fas fa-sign"></i> Estados
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('localidades')) || (request()->is('localidades/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('localidades') }}">
            <i class="fas fa-search-location"></i></i> Localidades
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('municipios')) || (request()->is('municipios/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('municipios') }}">
            <i class="fas fa-building"></i> Municipios
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('colonias')) || (request()->is('colonias/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('colonias') }}">
            <i class="fas fa-city"></i>Colonias
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('codigosPostales')) || (request()->is('codigosPostales/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('codigosPostales') }}">
            <i class="fas fa-mail-bulk"></i> Codigos postales
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('metodosPago')) || (request()->is('metodosPago/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('metodosPago') }}">
            <i class="fa-solid fa-file-invoice-dollar"></i> Métodos de pago
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('formasPago')) || (request()->is('formasPago/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('formasPago') }}">
            <i class="fa-solid fa-money-bill"></i> Formas de pago
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('regimenesFiscales')) || (request()->is('regimenesFiscales/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('regimenesFiscales') }}">
            <i class="fa-solid fa-r"></i> Regímenes fiscales
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('usoCFDI')) || (request()->is('usoCFDI/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('usoCFDI') }}">
            <i class="fa-solid fa-file-invoice"></i> Uso CFDI
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('CPS')) || (request()->is('claves_productosServicios/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('CPS') }}">
            <i class="fa-brands fa-product-hunt"></i> Claves de productos y servicios
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == route('clavesUnidad')) || (request()->is('clavesUnidad/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('clavesUnidad') }}">
            <i class="fa-solid fa-scale-balanced"></i> Claves de unidad
        </a>
    </li>
    <li class="nav-item {{ (Request::url() == url('seleccionar-datos')) || (request()->is('seleccionar-datos/*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{ url('seleccionar-datos') }}">
            <i class="fas fa-check-circle"></i> Seleccionar datos
        </a>
    </li>
</ul>