<?php

namespace App\Http\Controllers;

use App\Models\Pieza;
use App\Models\PiezaHistory;
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

    public function all(Request $request)
    {
        $per_page = $request->input('per_page', 5);

        $data = Pieza::filter($request)->paginate($per_page);

        return response()->json($data);
    }

    public function create(Request $request)
    {	{
        // Validar todos los campos enviados en el formulario
        $this->validate($request, [
            'SKU' => 'required|min:5|max:100',
            'codigo_pieza' => 'required',
            'descripcion_pieza'=>'required'

        ], [
            'SKU.required' => 'SKU es requerido',
            'SKU.min' => 'SKU no debe ser menor de 5 caracteres',
            'descripcion_pieza.required'=>'La descripción de la pieza es requerida'

        ]);

        // Convertir request en array/arreglo
        $input = $request->input();

        // Cambiar el valor de codigo_pieza a mayusculas
        $input['codigo_pieza'] = strtoupper($input['codigo_pieza']);
        $input['descripcion_pieza'] = strtoupper($input['descripcion_pieza']);
        
        // Guardar en DB
        $pieza = Pieza::create($input);

        /**PiezaHistory::create([
            'id_pieza' => $pieza->id,
            'user_id' => 'lalo'
        ]);
        **/
        // Mostar en pantalla respuesta JSON
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