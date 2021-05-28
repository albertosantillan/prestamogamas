<?php

namespace App\Http\Controllers;

use App\Models\Pieza;
use Illuminate\Http\Request;

class PiezaController extends Controller
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

    public function all()
    {
        $data = Operacion::all();

        return response()->json($data);
    }

    public function create(Request $request)
    {
        $operacion = Operacion::create($request->input());

        return response()->json($operacion);
    }

    public function edit()
    {
        # code...
    }

    public function delete()
    {
        # code...
    }
}
