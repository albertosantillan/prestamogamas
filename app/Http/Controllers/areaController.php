<?php

namespace App\Http\Controllers;

class areaController extends Controller
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
        $data = area::all();

        return response()->json($data);
    }

    public function create()
    {

        $data = area::create($request->input());

        return response()->json($area);
        
    }






    
}
