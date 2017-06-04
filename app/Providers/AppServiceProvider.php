<?php

namespace IASD\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        view()->share(['tipoOferta' => $this->tipoOferta(), 'meses' => $this->meses()]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }



    public function tipoOferta()
    {
        return ['Dízimo', 'Oferta de Pacto', 'Oferta de Sacrifício', 'Oferta Aleatória'];
    }


    public function meses()
    {
        return ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    }
}
