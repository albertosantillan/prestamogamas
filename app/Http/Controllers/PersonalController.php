<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
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
        $data = Personal::all();

        return response()->json($data);

    }

    public function create(Request $request)
    {
        $personal = Personal::create($request->inpunt());

        return response()->json($personal);
    }

    
}
