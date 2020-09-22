<?php

namespace App\Providers;

use App\Models\Contracts\PackageInterface;
use App\Models\Contracts\SchoolInterface;
use App\Models\Contracts\UserInterface;
use App\Models\Package;
use App\Models\School;
use App\Models\User;
use Illuminate\Support\Facades\Schema;
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

        // Bind models
        $this->app->bind(UserInterface::class, User::class);
        $this->app->bind(SchoolInterface::class, School::class);
        $this->app->bind(PackageInterface::class, Package::class);

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
