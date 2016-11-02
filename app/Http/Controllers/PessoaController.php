<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PessoaController extends Controller
{
    
    public function destroy($id){
        Pessoa::destroy($id);
        return redirect()->route('agenda.index');
        
    }

    public function delete($id){
        $pessoa = Pessoa::find($id);
        return view('pessoa.delete', compact('pessoa'));
    }

    public function create(){
        return view('pessoa.create');
    }

    public function store(Request $request){
        $validator = validator::make($request->all(), [
            'nome'=>'required|min:3|max:255|unique:pessoas',
            'apelido'=>'required|min:2|max:50',
            'sexo'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->route('pessoa.create'->withErrors($validator)->withInput());            
        }
        Pessoa::create($request->all());

        $pessoas = Pessoa::where('nome', $request->get('nome'))->get();
        return view('agenda', compact('pessoas'));
    }

    //
}
