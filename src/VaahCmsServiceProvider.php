<?php namespace WebReinvent\VaahCms;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;
use WebReinvent\VaahCms\Providers\ModulesServiceProvider;
use WebReinvent\VaahCms\Providers\ThemesServiceProvider;

/**
 * Class VaahCmsServiceProvider
 * @package WebReinvent\VaahCms
 */
class VaahCmsServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot(Router $router) {



        $this->registerMiddleware($router);
        $this->registerConfigs();
        $this->registerMigrations();
        $this->registerSeeders();
        $this->registerViews();
        $this->registerAssets();
        $this->registerTranslations();
        $this->registerRoutes();

    }


    /**
     *
     */
    public function register() {

        $this->registerConfigs();
        $this->registerProviders();
        $this->registerAlias();
        $this->registerHelpers();

    }



    /**
     *
     */
    private function registerMiddleware($router) {

        //register middleware
        $router->aliasMiddleware('has.admin.access', \WebReinvent\VaahCms\Http\Middleware\HasAdminAccess::class);
        $router->aliasMiddleware('set.theme.details', \WebReinvent\VaahCms\Http\Middleware\SetThemeDetails::class);
        $router->aliasMiddleware('set.template.details', \WebReinvent\VaahCms\Http\Middleware\SetTemplateDetails::class);


    }



    /**
     *
     */
    private function registerHelpers() {

        //load all the helpers
        foreach (glob(__DIR__.'/Helpers/*.php') as $filename){
            require_once($filename);
        }

    }

    /**
     * @return array
     */
    public function provides() {

        return [];
    }

    /**
     *
     */
    private function registerProviders() {

        //register module service provider
        $this->app->register(ModulesServiceProvider::class);
        $this->app->register(ThemesServiceProvider::class);
        $this->app->register(\ZanySoft\Zip\ZipServiceProvider::class);

    }


    /**
     *
     */
    private function registerAlias() {

        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('Zip', \ZanySoft\Zip\ZipFacade::class);

    }

    /**
     *
     */
    private function registerConfigs() {

        $configPath = __DIR__ . '/Config/vaahcms-composer.php';

        $this->mergeConfigFrom($configPath, 'vaahcms');

        $configPath = __DIR__ . '/Config/vaahcms.php';

        $this->publishes([$configPath => config_path('vaahcms.php')], 'config');

        $this->mergeConfigFrom($configPath, 'vaahcms');

    }

    /**
     *
     */
    private function registerTranslations() {

        $path = __DIR__.'/Resources/lang';

        $this->loadTranslationsFrom($path, 'vaahcms');

        $this->publishes([$path => base_path('resources/lang/vendor/vaahcms')], 'lang');
    }

    /**
     *
     */
    private function registerViews() {

        $this->loadViewsFrom(__DIR__.'/Resources/views', 'vaahcms');
        $this->publishes([__DIR__.'/Resources/views' => base_path('resources/views/vendor/vaahcms')], 'views');

    }

    /**
     *
     */
    private function registerAssets() {

        $this->publishes([__DIR__.'/Resources/assets' => base_path('resources/assets/vendor/vaahcms')], 'assets');

    }

    /**
     *
     */
    private function registerMigrations() {

        $this->publishes([__DIR__ . '/Database/Migrations' => database_path('migrations')], 'migrations');
    }

    /**
     *
     */
    private function registerSeeders() {

        $this->publishes([__DIR__ . '/Database/Seeders' => database_path('seeds')], 'seeds');
    }

    /**
     *
     */
    private function registerRoutes() {

        include __DIR__.'/Routes/admin.php';
        include __DIR__.'/Routes/public.php';
        include __DIR__.'/Routes/api.php';

    }


}
