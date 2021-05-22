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
        $data = Pieza::all();

        return response()->json($data);
    }
    public function edit()
    {

    public function create(Request $request)
    {
        $pieza = Pieza::create($request->input());

        return response()->json($pieza);
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
