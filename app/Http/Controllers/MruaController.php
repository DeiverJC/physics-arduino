<?php

namespace App\Http\Controllers;

use App\Mrua;
use Illuminate\Http\Request;

class MruaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Mrua::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mrua = Mrua::create([
            't1' => $request->t1,
            't2' => $request->t2
        ]);

        return $mrua;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mrua  $mrua
     * @return \Illuminate\Http\Response
     */
    public function show(Mrua $mrua)
    {
        //
    }
}
