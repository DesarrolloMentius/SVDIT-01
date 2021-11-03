<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/">
        <i class="fas fa-home"></i></i><span>INICIO</span>
    </a>
</li>
@can('ver-usuarios')
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/usuarios">
        <i class="fas fa-users"></i><span>USUARIOS</span>
    </a>
</li>
@endcan

@can('ver-roles')
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/roles">
        <i class="fas fa-user-shield"></i><span>ROLES</span>

    </a>
@endcan
@can('ver-colab')
</li>
<li class="side-menus {{ Request::is('*') ? 'active' : '' }}">
    <a class="nav-link" href="/empleados">
        <i class=" fas fa-building"></i><span>COLABORADORES</span>

    </a>
@endcan

</a>

