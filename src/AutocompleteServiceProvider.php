<?php
/**
 * PHP version 7.3
 *
 * @package Mistery23\GoogleMapsAutocomplete
 * @author  Sviatoslav Breznitskyi <bugatis15@gmail.com>
 */

namespace Mistery23\GoogleMapsAutocomplete;

use Illuminate\Support\ServiceProvider;

/**
 * Class AutocompleteServiceProvider
 */
class AutocompleteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return string
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/google-autocomplete.php' => config_path('google-autocomplete.php'),
            ], 'google-autocomplete-conf');
        }
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