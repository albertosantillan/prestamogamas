<?php

namespace App\Http\Controllers;

use App\Models\Maquina;
use Illuminate\Http\Request;

class MaquinaController extends Controller
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
        $data = Maquina::all();

        return response()->json($data);

    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nombre'=>'required'
        ], [
            'nombre.required'=>'El nombre de la máquina es requerido'
        ]);
        $input = $request->input();
        
        $input['nombre'] = strtoupper($input['nombre']);

        $maquina = Maquina::create($input);

        return response()->json($maquina);

    }
    
}
