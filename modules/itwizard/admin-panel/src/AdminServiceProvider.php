<?php

namespace Itwizard\Adminpanel;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\Localization;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Itwizard\Adminpanel\Console\ControllerCommand;
use Itwizard\Adminpanel\Console\ProcessCommand;

class AdminServiceProvider extends ServiceProvider
{
    public function boot(Router $router){

        view()->share('data', $this->GetDatas());

        $this->loadRoutesFrom(__DIR__.'./routes/web.php');
        $this->loadRoutesFrom(__DIR__.'./routes/api.php');
        $this->loadViewsFrom(__DIR__.'./resources/views','Admin');
        $this->mergeConfigFrom(__DIR__.'./config/app.php','Admin');
        $this->mergeConfigFrom(__DIR__.'./config/menus.php','Menu');
        $this->mergeConfigFrom(__DIR__.'./config/settings.php','setting');
        $this->loadMigrationsFrom(__DIR__.'./database/migrations');
        $this->loadJsonTranslationsFrom(__DIR__.'./resources/lang');
        $this->loadViewComponentsAs('adminComponents',[]);
        $router->middlewareGroup('auth', array(
                \App\Http\Middleware\EncryptCookies::class,
                \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
                \Illuminate\Session\Middleware\StartSession::class,
                \Illuminate\View\Middleware\ShareErrorsFromSession::class,
                \App\Http\Middleware\VerifyCsrfToken::class,
                \Illuminate\Routing\Middleware\SubstituteBindings::class,
                Authenticate::class,
                Localization::class,
            ));
    }
    public function register()
    {
        $this->commands([
            ProcessCommand::class,
            ControllerCommand::class,
        ]);
    }
    public function GetDatas(): array
    {
        $data['langs'] = DB::table('wpanel_available_language')->get();
        $data['logo'] = DB::table('wpanel_site_info')
            ->select('logo')
            ->first();
        return $data;
    }
}
