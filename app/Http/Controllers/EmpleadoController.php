<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

class EmpleadoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
    public function all()
    {
        $data = Empleado::all();

        return response()->json($data);

    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nomina'=>'required|integer',
            'nombre'=>'required'
        ],[
            'nomina.integer'=> 'El campo nómina debe ser un número válido',
            'nombre.required'=>'El campo nombre es requerido'
        ]);

        $personal = Empleado::create($request->inpunt());

        return response()->json($personal);
    }

    
}
