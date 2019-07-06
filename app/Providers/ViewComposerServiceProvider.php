<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{

    private $view_path = 'project.include.';
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        view()->composer([$this->view_path . 'head', $this->view_path . 'header', $this->view_path . 'footer', $this->view_path . 'slider', $this->view_path . 'testimonials', $this->view_path . 'recommendation'], 'App\Http\View\Composers\MasterComposer');
    }
}
