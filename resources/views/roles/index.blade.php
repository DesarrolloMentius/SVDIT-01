@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h5 class="page__heading">ROLES</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                        @can('crear-rol')
                        <a class="btn btn-success" href="{{ route('roles.create') }}">NUEVO</a>
                        @endcan


                        <table class="table table-striped mt-2">
                                <thead>
                                    <th>Rol</th>
                                    <th>Opciones</th>
                                </thead>
                                <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        @can('editar-rol')
                                            <a class="btn btn-warning" href="{{ route('roles.edit',$role->id) }}">EDITAR</a>
                                        @endcan

                                        @can('borrar-rol')
                                            {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                                {!! Form::submit('ELIMINAR', ['class' => 'btn btn-danger']) !!}
                                            {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <!-- Centramos la paginacion a la derecha -->
                            <div class="pagination justify-content-end">
                                {!! $roles->links() !!}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection
