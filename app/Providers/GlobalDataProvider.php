<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Setting;
use App\Models\InvoiceType;
use App\Models\Staff;
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

        $clientData = Client::all();
        View::share('clientData', $clientData);


        $staff = Staff::all();
        View::share('staff', $staff);


        $invoicesData = Invoice::all();
        View::share('invoicesData', $invoicesData);


    }
}
