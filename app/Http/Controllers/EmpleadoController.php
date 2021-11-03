<?php

namespace App\Http\Controllers;


use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Empleado as ControllersEmpleado;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Pagination\Paginator;
use Spatie\Permission\Models\Role;


class EmpleadoController extends Controller
{


    function __construct()
    {
        $this->middleware('permission:ver-empleado|crear-empleado|editar-empleado|borrar-empleado|ver-cedula|ver-nombres|ver-apellidos|ver-direccion', ['only' => ['index']]);
        $this->middleware('permission:crear-empleado', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-empleado', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-empleado', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto = trim($request->get('texto'));

        $empleados = DB::table('empleados')->select('id', 'cedula', 'fecha_exp', 'fecha_nacimiento', 'primer_nombre', 'segundo_nombre', 'primer_apellido', 'segundo_apellido', 'cargo', 'proceso', 'correo_electronico', 'numero_contacto')
            ->where('cedula', 'LIKE', '%' . $texto . '%')
            ->orderBy('id', 'asc')
            ->paginate(20);;
        return view('empleados.index', compact('empleados', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$datos = request()->validate([
            'cedula',
            'fecha_exp',
            'pnombre',
            'snombre',
            'papellido',
            'sapellido',
            'direccion'
        ]);*/

        $datos = request()->except('_token');

        if (empty($datos)) {

            return redirect('empleados');
        } else {

            Empleado::insert($datos);
            return redirect('empleados');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return view('empleados.editar', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado, $id)
    {
        /*request()->validate([
            'cedula' => 'required',
            'fecha_exp' => 'required',
            'fecha_nacimiento' => 'required',
            'primer_nombre' => 'required',
            'segundo_nombre' => 'required',
            'primer_apellido' => 'required',
            'segundo_apellido' => 'required',
            'numero_contacto' => 'required',
            'correo_electronico' => 'required',
            'cargo' => 'required',
            'proceso' => 'required'
        ]);*/

        $empleado->update($request->except('_token'));

        return view('empleados.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleados.index');
    }
}
