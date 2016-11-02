<?php

namespace CodeAgenda\Providers;


use CodeAgenda\Entities\Pessoa;
use CodeAgenda\Entities\Telefone;
use Illuminate\Support\ServiceProvider;


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
         $this->app->bind('Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse');
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
