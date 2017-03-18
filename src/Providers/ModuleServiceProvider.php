<?php
/**
 * ModuleAlias: install
 * ModuleName: install
 * Description: This is the first file run of module. You can assign bootstrap or register module Services
 * @author: noname
 * @version: 1.0
 * @package: PackagesCMS
 */
namespace Packages\CmsDev\Providers;

use Illuminate\Support\ServiceProvider;

class ModuleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application Services.
     *
     * @return void
     */
    public function boot()
    {
        // Load views
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'CmsDev');

        // Load translations
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'CmsDev');
        
        // Load helper
        if (\File::exists(__DIR__ . '/../../helper/helper.php')) {
            include __DIR__ . '/../../helper/helper.php';
        }
    }

    /**
     * Register the application Services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
