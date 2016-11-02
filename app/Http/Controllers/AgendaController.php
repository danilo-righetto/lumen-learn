<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;
use CodeAgenda\Entities\Telefone;
use Illuminate\Http\Request;

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
        $letras = $this->getLetras();
        return view('agenda', compact('pessoas', 'letras'));
    }

    public function busca(Request $request){
        $busca = $request->busca;
        $pessoas = [];
        if(!empty($busca)){
            $pessoas = Pessoa::where('nome', 'like', "%{$busca}%")->orWhere('apelido', 'like', "%{$busca}%")->get();
        }
        $letras = $this->getLetras();
        return view('agenda', compact('pessoas', 'letras'));
    }

    protected function getLetras(){
        $letras = [];
        foreach(Pessoa::all() as $pessoa){
            $letras[] = strtoupper(substr($pessoa->apelido,0,1));
        }
        /* Ordena alfabeticamente as pessoas */
        sort($letras);
        return array_unique($letras);
    }

    //
}
