<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('view-posts', function (\App\Models\User $user) {
            return true;
        });

        Gate::define('toggle-post-active', function (\App\Models\User $user, \App\Models\Post $post) {
            return $post->user->is($user)
                ? Response::allow()
                : Response::deny('You cannot toggle the Post because its not yours');
        });
    }
}
