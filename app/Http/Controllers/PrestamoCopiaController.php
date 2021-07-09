<?php

namespace App\Http\Controllers;

use App\Models\PrestamoCopia;
use Illuminate\Http\Request;

class PrestamoCopiaController extends Controller
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
        $per_page = $request->input('per_page',5);

        $data = PrestamoCopia::devueltos($request)->paginate($per_page);

        return response()->json($data);

    }

    public function create(Request $request)
    {
        $this->validate([
            'fechaTentDev'=>'required'
        ],[
            'fechaTentDev.required'=>'La fecha tentativa de devolución es requerida'
        ]);
        $PrestamoCopia = PrestamoCopia::create($request->inpunt());

        return response()->json($PrestamoCopia);
    }

    public function update(Request $request, $id)
    {
        $prestamoCopia = Prestamo::FindOrFail($id);
        $prestamoCopia->update($request->input());
        return response()->json([
            'message'=>'Prestamo actualizado',
            'prestamo'=>$prestamoCopia    
        ]);
    }

    
}
