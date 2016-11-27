<?php

namespace app\Providers;

use app\Services\ExceptionService;
use Nerd\Framework\Http\Services\ExceptionServiceContract;
use Nerd\Framework\ServiceProvider;

class ExceptionServiceProvider extends ServiceProvider
{
    public function register()
    {
        $exceptionService = new ExceptionService();
        $this->app->bind('app.exception-handler', $exceptionService);
    }

    public function provides()
    {
        return ['app.exception-handler'];
    }
}
