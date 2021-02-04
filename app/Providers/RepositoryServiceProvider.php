<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Contracts\OrderContract;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\View;
use Cart;

class RepositoryServiceProvider extends ServiceProvider
{

    protected $repositories = [
        OrderContract::class            =>          OrderRepository::class,
    ];
    public function register()
    {
        $this->app->bind(OrderContract::class,OrderRepository::class);


    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
