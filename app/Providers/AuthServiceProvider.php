<?php
namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Spatie\Permission\PermissionRegistrar;

class AuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerPolicies();

        // Optionally reset cached roles and permissions on boot.
        app(PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
