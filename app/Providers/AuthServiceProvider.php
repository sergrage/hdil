<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{

    protected $policies = [
        //'App\Model' => 'App\Policies\ModelPolicy',
    ];

    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin-panel', function (User $user){
            return $user->isAdmin() || $user->isModerator();
        });

        Gate::define('banned', function (User $user){
            return !$user->isBanned();
        });

        Gate::define('policy', function (User $user){
            return $user->policyAgree();
        });

    }
}
