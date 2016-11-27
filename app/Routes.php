<?php

namespace app\Routes;

use Nerd\Framework\Http\Response;
use Nerd\Framework\Routing\RouterContract as Router;

/**
 * @param Router $router
 */
function getRoutes(Router $router)
{
    $router->get('/', function () {
        return new Response\PlainResponse("Nerd Framework");
    });
}
