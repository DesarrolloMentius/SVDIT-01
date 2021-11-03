@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h5 class="page__heading">REGISTRAR COLABORADOR</h5>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">





                            <form action="{{ route('empleados.update',$empleado->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="row g-3">
                                    <div class="col">
                                        <label for="text" class="form-label">Documento</label>
                                        <input type="text" value="{{ isset ($empleado->cedula)?$empleado->cedula:'' }}" name="cedula" class="form-control" placeholder="N°"
                                            aria-label="Nombre">
                                    </div>
                                    <div class="col">
                                        <label for="text" class="form-label">Fecha de Expedicion</label>
                                        <input type="date" value="{{ isset ($empleado->fecha_exp)?$empleado->fecha_exp:'' }}" name="fecha_exp" class="form-control" aria-label="">
                                    </div>
                                    <div class="col">
                                        <label for="text" class="form-label">Primer Nombre</label>
                                        <input type="text" value="{{ isset ($empleado->primer_nombre)?$empleado->primer_nombre:'' }}" name="primer_nombre" class="form-control" placeholder=""
                                            aria-label="">
                                    </div>
                                    <div class="col">
                                        <label for="text" class="form-label">Segundo Nombre</label>
                                        <input type="text" value="{{ isset ($empleado->segundo_nombre)?$empleado->segundo_nombre:'' }}" name="segundo_nombre" class="form-control" placeholder=""
                                            aria-label="Segundo nombre">
                                    </div>
                                    <div class="col">
                                        <label for="text" class="form-label">Primer Apellido</label>
                                        <input type="text" value="{{ isset ($empleado->primer_apellido)?$empleado->primer_apellido:'' }}" name="primer_apellido" class="form-control" placeholder=""
                                            aria-label="Primer Apellido">
                                    </div>
                                    <div class="col">
                                        <label for="text" class="form-label">Segundo Apellido</label>
                                        <input type="text"value="{{ isset ($empleado->segundo_apellido)?$empleado->segundo_apellido:'' }}" name="segundo_apellido" class="form-control" placeholder=""
                                            aria-label="segundo Apellido">
                                    </div>

                                </div>

                                <div class="row g-3">
                                    <div class="col">
                                        <label for="text" style="margin-top:8px ;" class="form-label">Fecha de
                                            nacimiento</label>
                                        <input type="date" value="{{ isset ($empleado->fecha_nacimiento)?$empleado->fecha_nacimiento:'' }}" name="fecha_nacimiento" class="form-control" placeholder=""
                                            aria-label="Direccion">
                                    </div>
                                    <div class="col">
                                        <label for="text" style="margin-top:8px ;" class="form-label">Correo
                                            Electronico</label>
                                        <input type="email" value="{{ isset ($empleado->correo_electronico)?$empleado->correo_electronico:'' }}"name="correo_electronico" class="form-control"
                                            placeholder="E-mail" aria-label="Direccion">
                                    </div>
                                    <div class="col">
                                        <label for="text" style="margin-top:8px ;" class="form-label">Numero de
                                            contacto</label>
                                        <input type="number" value="{{ isset ($empleado->numero_contacto)?$empleado->numero_contacto:'' }}" name="numero_contacto" class="form-control"
                                            placeholder="Telefono">
                                    </div>
                                    <div class="col">
                                        <label for="text" style="margin-top:8px ;" class="form-label">Cargo</label>
                                        <select class="form-control" name="cargo" id="">

                                            <option selected>{{ isset ($empleado->cargo)?$empleado->cargo:'' }}</option>
                                            <option value="Analista Contable">Analista Contable</option>
                                            <option value="Analista de bases">Analista de bases</option>
                                            <option value="Analista de Calidad">Analista de Calidad</option>
                                            <option value="Analista de Contratacion">Analista de Contratacion</option>
                                            <option value="Analista De Datos">Analista De Datos</option>
                                            <option value="Analista de nomina">Analista de nomina</option>
                                            <option value="Analista de Reclutamiento y Seleccion">Analista de Reclutamiento
                                                y Seleccion</option>
                                            <option value="Analista IT">Analista IT</option>
                                            <option value="Aprendiz Sena">Aprendiz Sena</option>
                                            <option value="Asesor Comercial">Asesor Comercial</option>
                                            <option value="Asesor de Cartera">Asesor de Cartera</option>
                                            <option value="Asesor de Cartera">Asesor de Servicio al Cliente</option>
                                            <option value="Asistente Contable">Asistente Contable</option>
                                            <option value="Auxiliar administrativo">Auxiliar administrativo</option>
                                            <option value="Auxiliar contable">Auxiliar contable</option>
                                            <option value="Auxiliar IT">Auxiliar IT</option>
                                            <option value="Auxiliar SST">Auxiliar SST</option>
                                            <option value="Backoffice">Backoffice</option>
                                            <option value="Contador">Contador</option>
                                            <option value="Coord. Administrativo">Coord. Administrativo</option>
                                            <option value="Coordinador administrativo">Coordinador administrativo</option>
                                            <option value="Coordinador de Operaciones">Coordinador de Operaciones</option>
                                            <option value="Datamarshall Junior">Datamarshall Junior</option>
                                            <option value="Datamarshall Senior">Datamarshall Senior</option>
                                            <option value="Director financiero">Director financiero</option>
                                            <option value="Director IT">Director IT</option>
                                            <option value="Director RRHH">Director RRHH</option>
                                            <option value="Formador junior">Formador junior</option>
                                            <option value="Formador senior">Formador senior</option>
                                            <option value="Gerencia Administrativa">Gerencia Administrativa</option>
                                            <option value="Gerencia Comercial">Gerencia Comercial</option>
                                            <option value="Gerencia General">Gerencia General</option>
                                            <option value="Gerente comercial">Gerente comercial</option>
                                            <option value="Gerente financiero">Gerente financiero</option>
                                            <option value="Gerente general">Gerente general</option>
                                            <option value="Gestor documental">Gestor documental</option>
                                            <option value="Jefe de operaciones">Jefe de operaciones</option>
                                            <option value="Lider Backoffice">Lider Backoffice</option>
                                            <option value="Lider datos y metricas">Lider datos y metricas</option>
                                            <option value="Lider de Calidad">Lider de Calidad</option>
                                            <option value="Lider de Formacion">Lider de Formacion</option>
                                            <option value="Lider desarrollo">Lider desarrollo</option>
                                            <option value="Recepcionista">Recepcionista</option>
                                            <option value="Recuperador de ventas">Recuperador de ventas</option>
                                            <option value="Servicios generales">Servicios generales</option>
                                            <option value="Supervisor">Supervisor</option>
                                            <option value="Torre de control">Torre de control</option>


                                        </select>
                                    </div>
                                    </select>
                                </div>
                                <div class="row g-3">
                                    <div class="col">
                                        <label for="text" style="margin-top:8px ;" class="form-label">Proceso</label>
                                        <select class="form-control" name="proceso" id="">
                                            <option selected>{{ isset ($empleado->proceso)?$empleado->proceso:''}}</option>
                                            <option value="Staff">Staff</option>
                                            <option value="Operaciones">Operaciones</option>
                                            <option value="Direccion">Direccion</option>
                                            <option value="TI">TI</option>
                                        </select>
                                        </select>

                                    </div>
                                </div>

                                <!--<div style="display: flex;align-items: center;justify-content: center;" class="col-12">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                                        <label class="form-check-label" for="gridCheck">
                                                            Acepta la politica de tratado de Datos confidenciales actual en Mentius
                                                        </label>
                                                    </div>-->
                        </div>
                        <div style="display: flex;align-items: center;justify-content: center;" class="col-12">
                            <button type="submit" class="btn btn-primary">REGISTRAR</button>
                        </div>
                        </form>

                        <!--<form action="" method="post">




                                            </form>-->

                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
