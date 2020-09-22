<?php

namespace App\Providers;

use App\Policies\AdministrationPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::resource(AdministrationPolicy::POLICY_NAMESPACE, AdministrationPolicy::class, [
            AdministrationPolicy::ACTION_DASHBOARD => AdministrationPolicy::METHOD_DASHBOARD
        ]);

        /*
         * Resource and define methods to make gate are equal
         * Both will return user.dashboard rule
         * $test = Gate::resource(AdministrationPolicy::POLICY_NAMESPACE, AdministrationPolicy::class, [
            AdministrationPolicy::ACTION_DASHBOARD => AdministrationPolicy::METHOD_DASHBOARD
        ]);

        dd($test);

        Gate::define(AdministrationPolicy::POLICY_NAMESPACE.'.'.AdministrationPolicy::ACTION_DASHBOARD, [AdministrationPolicy::class, AdministrationPolicy::METHOD_DASHBOARD]);

        */
    }
}
