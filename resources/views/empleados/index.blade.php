@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h6 class="page__heading">LISTA DE COLABORADORES</h6>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                            <nav class="navbar navbar-light bg-light">
                                @can('crear-colab')
                                    <a class="btn btn-success" href="{{ route('empleados.create') }}">NUEVO</a>
                                @endcan
                                @can('buscar-colab')
                                    <form action="{{ route('empleados.index') }}" method="GET" class="form-inline">
                                        <input class="form-control mr-sm-2" name="texto" type="search" placeholder="buscar "
                                            value="" aria-label="Search">
                                        <input type="submit" class="btn btn-primary" value="Buscar"
                                            style="background-color: black">
                                    </form>

                                @endcan

                            </nav>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">

                                        <th>ID</th>
                                        @can('ver-cedula')
                                            <th>N° Documento</th>
                                        @endcan
                                        <th>Fecha Exp</th>
                                        <th>Fecha de Nacimiento</th>
                                        @can('ver-nombres')
                                            <th>Nombres</th>
                                            <th></th>
                                        @endcan
                                        @can('ver-apellidos')
                                            <th>Apellidos</th>
                                            <th></th>
                                        @endcan
                                        @can('ver-correo')
                                            <th>Correo</th>
                                        @endcan
                                        @can('ver-cargo')
                                            <th>Proceso</th>
                                            <th>Cargo</th>
                                        @endcan
                                        <th>N° contacto</th>
                                        <th>Opciones</th>
                                        <th></th>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach ($empleados as $empleado)

                                                <td>{{ $empleado->id }}</td>
                                                @can('ver-cedula')
                                                    <td>{{ $empleado->cedula }}</td>
                                                @endcan

                                                <td>{{ $empleado->fecha_exp }}</td>
                                                <td>{{ $empleado->fecha_nacimiento }}</td>
                                                @can('ver-nombres')
                                                    <td>{{ $empleado->primer_nombre }}</td>
                                                    <td>{{ $empleado->segundo_nombre }}</td>
                                                @endcan
                                                @can('ver-apellidos')
                                                    <td>{{ $empleado->primer_apellido }}</td>
                                                    <td>{{ $empleado->segundo_apellido }}</td>
                                                @endcan
                                                @can('ver-correo')
                                                    <td>{{ $empleado->correo_electronico }}</td>
                                                @endcan
                                                @can('ver-cargo')
                                                    <td>{{ $empleado->proceso }}</td>
                                                    <td>{{ $empleado->cargo }}</td>
                                                @endcan

                                                <td>{{ $empleado->numero_contacto }}</td>
                                                <td>
                                                    <form action="{{ route('empleados.destroy', $empleado->id) }}"
                                                        method="POST">
                                                        @can('editar-colab')
                                                            <a class="btn btn-info"
                                                                href="{{ route('empleados.edit', $empleado->id) }}">EDITAR</a>
                                                        @endcan
                                                </td>
                                                <td>
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-colab')
                                                        <button type="submit" class="btn btn-danger">BORRAR</button>
                                                    @endcan
                                                    </form>



                                                </td>

                                        </tr>


                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="pagination justify-content-end">
                                    {!! $empleados->links() !!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
