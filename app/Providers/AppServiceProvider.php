<?php

namespace App\Providers;

use App\Services\DwtServices;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        try {
            $dwtService = new DwtServices();
            $listDepartments = $dwtService->listDepartments()->data;
            $listUsers = $dwtService->listUsers()->data;
            $listKpiKeys = $dwtService->searchKpiKeys("", 1, 100)->data;

            View::share('global_departments', $listDepartments);
            View::share('global_users', $listUsers);
            View::share('global_kpiKeys', $listKpiKeys);
        } catch (\Exception $e) {
            error_log($e->getMessage());
            View::share('global_departments', []);
            View::share('global_users', []);
            View::share('global_kpiKeys', []);
        }
    }
}
