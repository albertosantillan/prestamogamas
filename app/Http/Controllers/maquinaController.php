<?php

namespace App\Http\Controllers;

class ExampleController extends Controller
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
        $data = maquina::all();

        return response()->json($data);

    }

    public function create(Request $request)
    {
        $operacion = Operacion::create($request->inpunt());

        return response()->json($operacion);

    }
    
}
