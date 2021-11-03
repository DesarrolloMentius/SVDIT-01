@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h5 class="page__heading">LISTA DE USUARIOS</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">


                                <a class="btn btn-success" href="{{ route('usuarios.create') }}">NUEVO</a>

                            <table class="table table-striped mt-2">
                                <thead>
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    <th>Correo</th>
                                    <th>Rol</th>
                                    <th>Opciones</th>
                                </thead>

                                <tbody>
                                    <tr>
                                        @foreach ($usuarios as $usuario)

                                            <td>{{ $usuario->id }}</td>
                                            <td>{{ $usuario->name }}</td>
                                            <td>{{ $usuario->email }}</td>
                                            <td>
                                                @if (!empty($usuario->getRoleNames()))
                                                    @foreach ($usuario->getRoleNames() as $rolNombre)
                                                        <h5><span class="badge badge-dark">{{ $rolNombre }}</span></h5>
                                                    @endforeach
                                                @endif
                                            </td>
                                            </td>
                                            <td>
                                                <a class="btn btn-warning"
                                                    href="{{ route('usuarios.edit', $usuario->id) }}">EDITAR</a>

                                                {!! Form::open(['method' => 'DELETE', 'route' => ['usuarios.destroy', $usuario->id], 'style' => 'display:inline']) !!}
                                                {!! Form::submit('ELIMINAR', ['class' => 'btn btn-danger']) !!}
                                                {!! Form::close() !!}
                                            </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <div class="pagination justify-content-end">
                                {!! $usuarios->links() !!}
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
