<?php

namespace app\Routes;

use Nerd\Framework\Application;
use Nerd\Framework\Http\Request\Request;
use Nerd\Framework\Http\Response\PlainResponse;
use Nerd\Framework\Routing\RouterContract;

function getRoutes(RouterContract $router)
{
    $router->get(':foo', function ($foo, Request $request) {
        return new PlainResponse($foo);
    });
}