<?php

namespace App\Http\Controllers;

use App\Models\Operacion;
use Illuminate\Http\Request;

class OperacionController extends Controller
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

    public function all(Request $request)
    {
        $data = Operacion::pieza($request);

        return response()->json($data);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'descripcion_op'=>'required'
        ],[
            'descripcion_op.required'=>'Ls descripción de la operación es requerida'
        ]);
        $input = $request->input();

        $input['descripcion_op'] = strtoupper($input['descripcion_op']);
        
        $operacion = Operacion::create($input);

        return response()->json($operacion);
    }

    public function update(Request $request, $id)
    {
        $operacion = Operacion::FindOrFail($id);
        $operacion->update($request->input());
        return response()->json([
            'message'=> 'Operacion actualizada',
            'operacion' => $operacion
        ]);

    }

    public function delete(Request $request, $id)
    {
        $operacion = Operacion::FindOrFail($id);
        $operacion->delete();
        return response()->json([
            'message'=> 'Operacion eliminada',
            'operacion'=> $operacion
        ]);

    }
}
