<?php

namespace Crud\Slider;

use Illuminate\Support\ServiceProvider;

class CrudServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        // نشر الكنترولر
        $this->publishes([
            __DIR__ . '/Http/Controllers/SliderController.php' => app_path('Http/Controllers/SliderController.php'),
        ], 'sliders-controller');

        $this->publishes([
            __DIR__ . '/Http/Requests/SliderRequest.php' => app_path('Http/Requests/SliderRequest.php'),
        ], 'sliders-requests');

        $this->publishes([
            __DIR__ . '/Models/Slider.php' => app_path('Models/Slider.php'),
        ], 'sliders-models');


        $this->publishes([
            __DIR__ . '/views' => resource_path('resources/views/sliders'),
        ], 'sliders-views');


    }

    public function register()
    {
        //
    }
};
