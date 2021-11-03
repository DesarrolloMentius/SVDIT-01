@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h5 class="page__heading">REGISTRAR USUARIOS</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">

                            @if ($errors->any())
                                <div class="alert alert-dark alert-dismissible fade show " role="alert">
                                    <strong>COMPLETA LOS DATOS</strong>
                                    @foreach ($errors->all() as $error)
                                        <span class="badge badge-danger">{{ $error }}</span>
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close"><span aria-hidden="true">&times;</span></button>

                                    @endforeach

                                </div>
                            @endif

                            {!! Form::open(['route' => 'usuarios.store', 'method' => 'POST']) !!}
                            <div class="row g-3">
                                <div class="col">
                                    <label for="text" class="form-label">Nombre</label>
                                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="col">
                                    <label for="text" class="form-label">Correo</label>
                                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                                </div>
                                <div class="col">
                                    <label for="text" class="form-label">Contraseña</label>
                                    {!! Form::password('password', ['class' => 'form-control']) !!}
                                </div>
                                <div class="col">
                                    <label for="text" class="form-label">Confirmar contraseña</label>
                                    {!! Form::password('confirm-password', ['class' => 'form-control']) !!}
                                </div>

                                <div class="col">
                                    <label for="rol" class="form-label">Rol</label>
                                    {!! Form::select('roles[]', $roles, [], ['class' => 'form-control']) !!}
                                </div>
                                <div style="display: flex; align-items: center;justify-content: center "
                                    class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck" required
                                            title="Debes aceptar nuestras politicas para continuar">
                                        <label class="form-check-label" for="gridCheck">
                                            Acepta la <a href="">politica</a> de tratado de Datos confidenciales actual en
                                            Mentius
                                    </div>
                                </div>

                                <div style="display: flex;
                                align-items: center;
                                justify-content: center;" class="col-12">
                                    <input type="submit" class="btn btn-primary" value="GUARDAR">
                                </div>
                            </div>
                            {!! Form::close() !!}



                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
