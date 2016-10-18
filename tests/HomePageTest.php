<?php

namespace tests;

use Nerd\Framework\Http\Response\PlainResponse;

class HomePageTest extends FrameworkTest
{
    public function testStartPage()
    {
        $response = $this->go('/');
        $this->assertInstanceOf(PlainResponse::class, $response);
        $this->assertEquals('Nerd Framework', $response->getContent());
    }
}
