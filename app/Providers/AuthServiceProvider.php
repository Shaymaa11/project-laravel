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


        //////define gate all role
        Gate::define("isTeacher", function ($user) {
            // function($user){
            return $user->role == "teacher";
            // };
        });
        /////////////////////////////////////
        Gate::define("isStudent", function ($user) {
            // function ($user) {
            return $user->role == "student";
            // };
        });
    
        ////////////////////////////////
    }
}
