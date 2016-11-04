<?php

namespace CodeAgenda\Providers;


use CodeAgenda\Entities\Pessoa;
use CodeAgenda\Entities\Telefone;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{

    public function boot(){
        /* Compartilhando dados entre as views */
        view()->share(['letras'=>$this->getLetras()]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        //$this->app->bind('QueueingFactory');
        //$this->app->bind('AddQueuedCookiesToResponse');
    }

    protected function getLetras(){
        /*
        $letras = [];
        foreach(Pessoa::all() as $pessoa){
            $letras[] = strtoupper(substr($pessoa->apelido,0,1));
        }
        
        
        sort($letras);
        return array_unique($letras);
        */

        $pessoas = Pessoa::select('apelido')->orderBy('apelido')->get();
         $letras = [];

         foreach ($pessoas as $pessoa) {
             $letras[] = strtoupper(substr($pessoa->apelido, 0, 1));
         }
         return array_count_values($letras);
    }
}
