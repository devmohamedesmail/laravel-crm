<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\Setting;
use App\Models\InvoiceType;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class GlobalDataProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $branches = Branch::all(); 
        View::share('branches', $branches);

        $setting = Setting::first();
        View::share('setting', $setting);

        $invoicesTypes = InvoiceType::all();
        View::share('invoicesTypes', $invoicesTypes);
    }
}
