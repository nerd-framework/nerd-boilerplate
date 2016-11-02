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

        $this->getApplication()->bind(ExceptionServiceContract::class, $exceptionService);
    }

    public static function provides()
    {
        return [ExceptionServiceContract::class];
    }
}