<h6 class="navbar-heading text-muted">GESTIÓN</h6>
<ul class="navbar-nav">
  
    <li class="nav-item  active ">
        <a class="nav-link  active " href="./index.html">
            <i class="ni ni-tv-2 text-primary"></i> Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./examples/icons.html">
            <i class="fas fa-archive text-blue"></i> Especialidades
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link " href="./examples/maps.html">
            <i class="fas fa-stethoscope text-green"></i> Médicos
        </a>
    </li>
    
    <li class="nav-item">
        <a class="nav-link" href="./examples/login.html">
            <i class="fas fa-procedures text-danger"></i> Pacientes
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('formLogout').submit();"
        >
            <i class="fas fa-sign-in-alt text-danger"></i> Cerrar sesión
        </a>
        <form action="{{ route('logout') }}" method="POST" style="display: none " id="formLogout">
            @csrf
        </form>
    </li>
</ul>
<!-- Divider -->
<hr class="my-3">
<!-- Heading -->
<h6 class="navbar-heading text-muted">REPORTES</h6>
<!-- Navigation -->
<ul class="navbar-nav mb-md-3">
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html">
            <i class="ni ni-books text-blue"></i> Citas
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html">
            <i class="ni ni-chart-bar-32 text-danger"></i> Desempeño Médico
        </a>
    </li>
    
