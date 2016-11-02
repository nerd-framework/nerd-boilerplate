<?php

namespace app\Routes;

use Nerd\Framework\Http\Response;
use Nerd\Framework\Routing\RouterContract;

function getRoutes(RouterContract $router)
{
    $router->get('/', function () {
        return new Response\PlainResponse("Nerd Framework");
    });
}
