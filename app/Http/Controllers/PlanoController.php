<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

class PlanoController extends Controller
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
        $data = Plano::all();

        return response()->json($data);
    }

    public function create(Request $request)
    {
        $input = $request->input();
        
        $input['No_hoja']= strtoupper($input['No_hoja']);

        $plano = Plano::create($input);

        return response()->json($plano);
    }

    public function update(Request $request, $id)
    {
        $plano = Plano::findOrFail($id);
        $plano->update($request->input());
        return response()->json([
            'message' => 'plano modificado ',
            'plano' => $plano
        ]);
    }

    public function delete(Request $request, $id)
    {
        $plano = Plano::findOrFail($id);
        $plano->delete();
        return response()->json([
            'message' => 'plano eliminado ',
            'plano' => $pieza
        ]);
    }
}