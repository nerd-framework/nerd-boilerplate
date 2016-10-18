<?php

namespace tests;

use Nerd\Framework\Application;
use Nerd\Framework\TestSuite\Navigator;
use Nerd\Framework\TestSuite\NavigatorContract;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    /**
     * @var NavigatorContract
     */
    private $navigator;

    public function setUp()
    {
        $application = new Application(__DIR__ . '/..', 'test');
        $this->navigator = new Navigator($application, $this);
    }

    /**
     * @param $path
     * @param string $method
     * @param array $data
     * @return \Nerd\Framework\TestSuite\NavigatorResult\PlainResultContract
     */
    public function go($path, $method = 'GET', array $data = [])
    {
        return $this->navigator->go($path, $method, $data);
    }

    /**
     * @param $path
     * @param string $method
     * @param array $data
     * @return \Nerd\Framework\TestSuite\NavigatorResult\JsonResultContract
     */
    public function goJson($path, $method = 'GET', array $data = [])
    {
        return $this->navigator->goJson($path, $method, $data);
    }
}
