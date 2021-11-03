<?php

namespace LocaleEdu;

class LocaleServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../resources/config/locale.php' => config_path('locale.php'),
        ]);
        $this->loadRoutesFrom(__DIR__ . '/router.php');
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'locale');
        //        view('locale::dropdown');
    }
}
