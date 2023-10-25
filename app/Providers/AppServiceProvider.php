<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $socialLink = DB::table('social_links')->get();
        $systemDataAll = DB::table('system_infos')->latest()->first();

        view()->share('systemDataAll', $systemDataAll);
        view()->share('socialLink', $socialLink);
    }
}
