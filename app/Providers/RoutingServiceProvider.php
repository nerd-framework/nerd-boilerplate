<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 11/27/16
 * Time: 12:31 AM
 */

namespace app\Providers;

use Nerd\Framework\Routing\Router;
use Nerd\Framework\Routing\RouterException;
use Nerd\Framework\ServiceProvider;

class RoutingServiceProvider extends ServiceProvider
{
    private $routeSourceKey = 'router.routes';

    public function register()
    {
        $router = new Router();

        $router->setGlobalRouteHandler(function ($action, $args) {
            return $this->app->invoke($action, array_values($args));
        });

        $router->setGlobalMiddlewareHandler(function ($action, $args, $next) {
            $args[] = $next;
            return $this->app->invoke($action, array_values($args));
        });

        $this->app['app.router'] = $router;

        $this->loadRoutes($router);
    }

    private function loadRoutes(Router $router)
    {
        $routes = $this->app->config($this->routeSourceKey);

        if (!function_exists($routes)) {
            throw new RouterException(
                "Setting \"{$this->routeSourceKey}\" does not point to valid function."
            );
        }

        $routes($router);
    }

    /**
     * List of services provided by this provider.
     *
     * @return mixed
     */
    public function provides()
    {
        return ['app.router'];
    }
}