<div class="flex-shrink-0 p-3 bg-white">
    <h6 class="navbar-heading text-muted">Gestionar datos</h6>
    
    <ul class="list-unstyled">
        <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#importarDatos-collapse" aria-expanded="true">
                Importar datos
            </button>
            <div class="collapse show" id="importarDatos-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-3 small ">
                    <li><a href="{{ url('/estado') }}" class="link-dark rounded text-black">Estados</a></li>
                    <li><a href="{{ url('/localidad') }}" class="link-dark rounded">Localidad</a></li>
                    <li><a href="{{ url('/municipio') }}" class="link-dark rounded">Municipios</a></li>
                    <li><a href="{{ url('/colonia') }}" class="link-dark rounded">Colonias</a></li>
                    <li><a href="{{ url('/codigoPostal') }}" class="link-dark rounded">Codigo Postal</a></li>
                    <li><a href="{{ url('/seleccionar-datos') }}" class="link-dark rounded">Seleccionar datos</a></li>
                    <hr class="p-0 my-2">
                    <li><a href="{{ url('/metodoPago') }}" class="link-dark rounded">Métodos de pago</a></li>
                    <li><a href="{{ url('/formaPago') }}" class="link-dark rounded">Formas de pago</a></li>
                    <li><a href="{{ url('/regimenFiscal') }}" class="link-dark rounded">Regimén fiscal</a></li>
                    <li><a href="{{ url('/usoCFDI') }}" class="link-dark rounded">Uso CFDI</a></li>
                    <li><a href="{{ url('claves_productosServicios') }}" class="link-dark rounded">Claves de productos y servicios</a></li>
                    <li><a href="{{ url('/clavesUnidad') }}" class="link-dark rounded">Clave de unidad</a></li>
                </ul>
            </div>
        </li>
        <hr class="my-3">
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
</div>