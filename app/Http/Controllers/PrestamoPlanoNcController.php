<?php

namespace App\Http\Controllers;

use App\Models\PrestamoPlanoNc;
use Illuminate\Http\Request;

class PrestamoPlanoNcController extends Controller
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
        $data = PrestamoPlanoNc::all();

        return response()->json($data);

    }

    public function create(Request $request)
    {
        $prestamoNc = PrestamoPlanoNc::create($request->inpunt());

        return response()->json($prestamoNc);
    }

    public function update(Request $request, $id)
    {
        $prestamoNc = PrestamoPlanoNc::FindOrFail($id);
        $prestamoNc->update($request->input);
        return response()->json([
            'message'=> 'Prestamo actualizado',
            'prestmoNc'=>$prestamoNc
        ]);
    }
}
