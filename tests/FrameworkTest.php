<?php

namespace tests;

use Nerd\Framework\Application;
use Nerd\Framework\Http\Request\Request;
use Nerd\Framework\Http\Response\PlainResponse;
use PHPUnit\Framework\TestCase;

class FrameworkTest extends TestCase
{
    /**
     * @var Application
     */
    private $application;

    public function setUp()
    {
        $baseDir = __DIR__ . '/../';
        $environment = 'test';
        $this->application = new Application($baseDir, $environment);
    }

    public function testStartPage()
    {
        $request = Request::create('/');

        $response = $this->application->handle($request);

        $response->prepare($request);

        $this->assertInstanceOf(PlainResponse::class, $response);

        $this->assertEquals('Nerd Framework', $response->getContent());
    }
}
