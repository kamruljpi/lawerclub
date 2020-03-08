<?php

namespace kamruljpi\lawsettings\Providers;

use Illuminate\Support\ServiceProvider;


class LawSettingsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $package_views = config("lawsettings.path.package_views");
        $package_migrations = config("lawsettings.path.package_migrations");
        $base_views = config("lawsettings.path.base_views");
        $base_migrations = config("lawsettings.path.base_migrations");
        $load_base_views = config("lawsettings.path.load_base_views");
        $load_base_migrations = config("lawsettings.path.load_base_migrations");
        $assets_path = config("lawsettings.path.package_assets");
        $base_assets_path = config("lawsettings.path.base_assets");
        $views_path = $package_views;
        if($load_base_views){
            $views_path = $base_views;
        }
        $migrations_path = $package_migrations;
        if($load_base_migrations){
            $migrations_path = $base_migrations;
        }
        $this->loadViewsFrom($views_path, 'lawsettings');
        
        $this->publishes([
                $package_views => $base_views,
            ]);
        $this->publishes([
                    $this->getConfigFile() => config_path('lawsettings.php'),
                ], 'config');

        $this->publishes([
                $package_migrations => $base_migrations
            ], 'migrations');

        $this->loadMigrationsFrom($migrations_path);

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
                $this->getConfigFile(),
                'lawsettings'
            );
    }
    protected function getConfigFile()
    {
        return __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'lawsettings.php';
    }
}
