<?php

namespace Blashbrook\PAPIForms;

use Blashbrook\PAPIForms\App\Http\Livewire\TeenPassRegistrationForm;
use Blashbrook\PAPIForms\App\Http\Controllers\DeliveryOptionController;
use Blashbrook\PAPIForms\App\Http\Controllers\MobilePhoneCarrierController;
use Blashbrook\PAPIForms\App\Http\Controllers\PostalCodeController;
use Blashbrook\PAPIForms\App\Http\Controllers\UdfOptionController;
use Blashbrook\PAPIForms\App\Http\Controllers\PatronCodeController;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class PAPIFormsServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'papiforms');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'papiforms');
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        Livewire::component('teen-pass-registration-form', TeenPassRegistrationForm::class);

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/config/papiforms.php', 'papiforms');

        // Register the service the package provides.
        $this->app->singleton('papiforms', function ($app) {
            return new PAPIForms();
        });
        $this->app->singleton('delivery_option_controller', function($app)
        {
            return new DeliveryOptionController();
        });
        $this->app->singleton('mobile_phone_carrier_controller', function($app)
        {
            return new MobilePhoneCarrierController();
        });
        $this->app->singleton('postal_code_controller', function($app)
        {
            return new PostalCodeController();
        });
        $this->app->singleton('udf_option_controller', function($app)
        {
            return new UdfOptionController();
        });
        $this->app->singleton('patron_code_controller', function($app)
        {
            return new PatronCodeController();
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['papiforms'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/config/papiforms.php' => config_path('papiforms.php'),
        ], 'papiforms.config');

        // Publishing the views.
        $this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/vendor/blashbrook'),
        ], 'papiforms.views');

        // Publishing assets.
        $this->publishes([
            __DIR__.'/resources/assets' => public_path('vendor/blashbrook'),
        ], 'papiforms.views');

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/blashbrook'),
        ], 'papiforms.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
