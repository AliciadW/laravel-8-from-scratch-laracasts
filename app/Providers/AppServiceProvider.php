<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

use App\Services\Newsletter;
use App\Services\MailChimpNewsletter;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind(Newsletter::class, function () {

            $client = (new ApiClient)->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us21'
            ]);

            return new MailChimpNewsletter($client);

        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Paginator::useTailwind();
        // This is the default, so we don't need to update it, but this is where you will update and specify specific usages

        Gate::define('admin', function (User $user) {
            return $user->username === 'janeD';
        });

        Blade::if('admin', function () {
            return request()->user()?->can('admin');
        });
    }
}
