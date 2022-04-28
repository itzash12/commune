<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('is_admin', function($user) {
            return $user->role == '1';
         });
        
         /* define a manager user role */
         Gate::define('is_manager', function($user) {
             return $user->role == '2';
         });
       
         /* define a user role */
         Gate::define('is_user', function($user) {
             return $user->role == '0';
         });
     

        //
    }
}
