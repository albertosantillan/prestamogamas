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
    public function all(Request $request)
    {
        $per_page = $request->input('per_page', 2);

        $data = Prestamo::Devueltos($request)->paginate($per_page)->with(['area','maquina']);

        return response()->json($data);

    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'fechaTentDev'=>'required'
        ],[
            'fechaTentDev.required'=>'La fecha tentativa de devolución es requerida'
        ]);
        $input = $request->input();
        
        $Prestamo = Prestamo::create($request->input());

        return response()->json($Prestamo);
    }

    public function update(Request $request, $id)
    {
        $prestamo = Prestamo::FindOrFail($id);
        $prestamo->update($request->input());
        return response()->json([
            'message'=>'prestamo actualizado',
            'prestamo'=> $prestamo
        ]);
    }

}
