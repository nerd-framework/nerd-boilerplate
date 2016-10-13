<?php

namespace tests;

use Nerd\Framework\Http\IO\GenericHttpOutput;
use Nerd\Framework\Http\Request\Request;
use PHPUnit\Framework\TestCase;

class FrameworkTest extends TestCase
{
    public function testStartPage()
    {
        $request = Request::create('/');

        $baseDir = __DIR__ . '/../';
        $environment = 'test';
        $application = new \Nerd\Framework\Application($baseDir, $environment);

        $response = $application->handle($request);
        $response->prepare($request);

        $output = $this->getMockBuilder(GenericHttpOutput::class)->getMock();
        $output->expects($this->once())
            ->method('sendData')
            ->with($this->equalTo('Nerd Framework'));

        $response->render($output);
    }
}
