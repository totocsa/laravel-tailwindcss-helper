<?php

namespace Totocsa\TailwindcssHelper;

use Illuminate\Support\ServiceProvider;

class TailwindcssHelperServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Ha van konfigurációs fájl, azt itt töltheted be
        //$this->mergeConfigFrom(__DIR__.'/../config/destroy-confirm-modal.php', 'destroy-confirm-modal');
    }

    public function boot()
    {
        // Publikálható migrációk
    }
}
