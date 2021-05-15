<?php

namespace Zupaazhai\Windtall;

use Illuminate\Support\ServiceProvider;
use Illuminate\View\Compilers\BladeCompiler;
class WindtallServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/windtall.php', 'windtall');
    }

    /**
     * Boot package
     *
     * @return void
     */
    public function boot(): void
    {
        $this->bootResources();
        $this->bootBladeComponents();
    }

    /**
     * Boot resource
     *
     * @return void
     */
    private function bootResources(): void
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'windtall');
    }

    /**
     * Boot blade components
     *
     * @return void
     */
    private function bootBladeComponents(): void
    {
        $this->callAfterResolving(BladeCompiler::class, function (BladeCompiler $blade) {

            $prefix = config('windtall.prefix', '');

            foreach (config('windtall.components', []) as $alias => $component) {
                $blade->component($component, $alias, $prefix);
            }
        });
    }
}
