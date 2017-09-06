<?php

use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    function setUp()
    {

    }

    public function testLoadConfig()
    {
        $config = new Config();
        $config->attach(new Config_File());
        $configTest = $config->load('test');

        $this->assertEquals('success', $configTest->get('test'));
    }

    public function tearDown()
    {

    }
}