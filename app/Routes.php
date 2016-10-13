<?php

namespace app\Routes;

use Nerd\Framework\Http\Response\PlainResponse;
use Nerd\Framework\Routing\RouterContract;

function getRoutes(RouterContract $router)
{
    $router->get('/', function () {
        return new PlainResponse("Nerd Framework");
    });
}
