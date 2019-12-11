<?php
/**
 * PHP version 7.3
 *
 * @package Mistery23\GoogleMapsAutocomplete
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace Mistery23\GoogleMapsAutocomplete;

use Illuminate\Support\ServiceProvider;
use Blade;

class AutocompleteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return string
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'autocomplete-input');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/autocomplete-input'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/google-autocomplete.php' => config_path('google-autocomplete.php'),
            ]);
        }


        Blade::directive('autocomplete_input', function ($expression) {
            list($inputId, $inputName, $inputLabel, $types) = explode(', ', $expression);

            return AutocompleteWidget::renderInput($inputId, $inputName, $inputLabel, $types);
        });

        Blade::directive('autocomplete_scripts', function () {
            return '<script src="https://maps.googleapis.com/maps/api/js?key='. config('google-autocomplete.api_key') .'&libraries=places"></script>';
        });
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
}