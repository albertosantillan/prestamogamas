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
        $maquina = Maquina::create($request->input());

        return response()->json($maquina);

    }
    
}
