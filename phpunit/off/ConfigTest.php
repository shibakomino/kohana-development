<?php

class ConfigTest extends PHPUnit_Framework_TestCase
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