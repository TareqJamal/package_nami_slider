<?php

namespace Crud\Slider;

use Illuminate\Support\ServiceProvider;

class SliderServiceProvider extends ServiceProvider
{
    public function boot(): void
    {

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->publishes([
            __DIR__ . '/Http/Controllers/SliderController.php' => app_path('Http/Controllers/SliderController.php'),
            __DIR__ . '/Http/Requests/SliderRequest.php' => app_path('Http/Requests/SliderRequest.php'),
            __DIR__ . '/Http/Requests/UpdateSliderRequest.php.php' => app_path('Http/Requests/UpdateSliderRequest.php'),
            __DIR__ . '/Models/Slider.php' => app_path('Models/Slider.php'),
            __DIR__ . '/views' => resource_path('views/sliders'),
        ], 'slider-package');
    }


    public function register()
    {
        //
    }
}

;
