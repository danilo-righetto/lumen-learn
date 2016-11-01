<?php

namespace CodeAgenda\Http\Controllers;

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

    public function index(){
        return view('agenda');
    }

    //
}
