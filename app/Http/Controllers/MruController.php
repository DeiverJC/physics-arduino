<?php

namespace App\Http\Controllers;

use App\Mru;
use App\Mrua;
use Illuminate\Http\Request;

class MruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mru = Mru::all()->last();
        $mrua = Mrua::all()->last();

        return view('mru.index', compact('mru', 'mrua'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mru = Mru::create([
            't1' => $request->t1
        ]);

        return $mru;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mru  $mru
     * @return \Illuminate\Http\Response
     */
    public function show(Mru $mru)
    {
        //
    }
}
