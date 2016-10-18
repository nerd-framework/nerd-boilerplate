<?php

namespace tests;

class HomePageTestCase extends TestCase
{
    public function testStartPage()
    {
        $this->go('/')->notEmpty()->contains('Hello');
    }
}
