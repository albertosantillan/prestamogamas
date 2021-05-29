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

    public function create(Request $request)
    {
        $pieza = Pieza::create($request->input());

        return response()->json($pieza);
    }

    public function update(Request $request, $id)
    {
        $pieza = Pieza::findOrFail($id);
        $pieza->update($request->input());
        return response()->json([
            'message' => 'pieza modificada ',
            'pieza' => $pieza
        ]);
    }

    public function delete(Request $request, $id)
    {
        $pieza = Pieza::findOrFail($id);
        $pieza->delete();
        return response()->json([
            'message' => 'pieza eliminada ',
            'pieza' => $pieza
        ]);
    }
}