<?php

class ConfigTest extends PHPUnit_Framework_TestCase
{
    function setUp()
    {

    }

    public function testVersion()
    {
        $this->assertEquals(true, version_compare(PHP_VERSION, '5.4', '>'));
    }

    public function testOpenSSL(){
        $this->assertEquals(true, function_exists('openssl_random_pseudo_bytes'));

    }

    public function tearDown()
    {

    }
}