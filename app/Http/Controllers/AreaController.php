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

    public function create()
    {

        $area = Area::create($request->input());

        return response()->json($area);
        
    }

    

    
}
