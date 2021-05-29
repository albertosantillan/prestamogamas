<?php

namespace App\Http\Controllers;

use App\Models\Prestamo;
use Illuminate\Http\Request;

class PrestamoController extends Controller
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
        $data = Prestamo::all();

        return response()->json($data);

    }

    public function create(Request $request)
    {
        $Prestamo = Prestamo::create($request->inpunt());

        return response()->json($Prestamo);
    }

    
}
