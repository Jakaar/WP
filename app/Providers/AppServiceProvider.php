<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
     public function boot()
     {
         $static['css'] = DB::table('client_static_file')
             ->where('type_id', 1)
             ->get();
         $static['js'] = DB::table('client_static_file')
             ->where('type_id', 2)
             ->get();

         $site_info = DB::table('wpanel_site_info')->first();

         $title = json_decode($site_info->terms_of_condition, true);


         view()->share('site_info', $site_info);

         view()->share('static', $static);
         view()->share('Main', $this->GetMenu());
     }

     public function GetMenu()
     {
         Session::put('locale', 'en');
         $Main['menu'] = Category::whereNull('category_id')
             ->where('isEnabled', 1)
             ->with('childrenCategories')
             ->get();
         $Main['language'] = DB::table('wpanel_available_language')->get();
 //        dd($Main);
         return $Main;
     }
}
