<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
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
        $data = Area::all();

        return response()->json($data);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nombre'=>'required'
        ], [
            'nombre.required'=>'El nombre del área es requerido'
        ]);
        $input = $request->input();
        
        $input['nombre'] = strtoupper($input['nombre']);

        $area = Area::create($input);

        return response()->json($area);
        
    }

    

    
}
