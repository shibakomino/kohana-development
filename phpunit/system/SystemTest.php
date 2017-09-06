<?php

class SystemTest extends PHPUnit_Framework_TestCase
{
    function setUp()
    {
        Kohana::modules([
            'core-wrapper' => MODPATH . 'core/wrapper',
        ]);
        Kohana::modules_init();
    }

    public function testVersion()
    {
        $this->assertEquals(true, version_compare(PHP_VERSION, '5.4', '>'));
    }

    public function testOpenSSL()
    {
        $this->assertEquals(true, function_exists('openssl_random_pseudo_bytes'));

    }

    public function testSanitize()
    {

    }

    public function testLoad()
    {

    }

    public function testFindFile()
    {

    }

    public function tearDown()
    {

    }
}