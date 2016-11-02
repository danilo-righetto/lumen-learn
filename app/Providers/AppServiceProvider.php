<?php

namespace CodeAgenda\Providers;

use Illuminate\Support\ServiceProvider;
use CodeAgenda\Entities\Pessoa;
use CodeAgenda\Entities\Telefone;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function boot(){
        /* Compartilhando dados entre as views */
        view()->share(['letras'=>$this->getLetras()]);
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
}
