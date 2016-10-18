<?php

namespace tests;

use Nerd\Framework\Application;
use Nerd\Framework\Http\Request\Request;
use PHPUnit\Framework\TestCase;

abstract class FrameworkTest extends TestCase
{
    /**
     * @var Application
     */
    private $application;

    public function setUp()
    {
        $this->application = new Application(__DIR__ . '/..', 'test');
    }

    /**
     * @param $path
     * @param string $method
     * @return \Nerd\Framework\Http\Response\Response
     */
    public function go($path, $method = 'GET')
    {
        $request = Request::create($path, $method);
        $response = $this->application->handle($request);
        $response->prepare($request);
        return $response;
    }
}
