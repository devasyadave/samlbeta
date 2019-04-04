<?php

namespace provider;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class ssoEventServiceProvider extends ServiceProvider
{
    protected $listen = ['Illuminate\Auth\Events\Logout' => [
        'MiniOrange\Classes\Actions\LogoutListener',
    ],];
}
