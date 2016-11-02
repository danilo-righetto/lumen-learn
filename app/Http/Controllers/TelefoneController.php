<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Telefone;
use CodeAgenda\Entities\Pessoa;

class TelefoneController extends Controller
{
    
    public function destroy($id){
        Telefone::destroy($id);
        return redirect()->route('agenda.index');
        
    }

    public function delete($id){
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;
        return view('telefone.delete', compact('telefone','pessoa'));
    }

    //
}
