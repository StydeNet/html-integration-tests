<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $theme = config('html.theme');

        view()->share('layout', "layouts.$theme"); // layouts.bootstrap4

        $component = config("html.themes.$theme.panel-component");

        view()->share('panelComponent', "components.$theme.$component");

        view()->share('rowComponent', "components.$theme.row");

        view()->share('submitClasses', config("html.themes.$theme.other_classes.submit"));

        view()->share('linkClasses', config("html.themes.$theme.other_classes.link"));

        view()->share('submitGroup', "components.$theme.submit-form-group");

        view()->share('errorsComponent', "components.$theme.errors"); // errors-bootstrap4
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
