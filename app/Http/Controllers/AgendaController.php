<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;

class AgendaController extends Controller
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

    public function index($letra = "A"){
        //$pessoas = Pessoa::all();
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', compact('pessoas'));
    }

    //
}
