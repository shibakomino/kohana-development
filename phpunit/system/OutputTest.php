<?php

class OutputTest extends PHPUnit_Framework_TestCase
{
    function setUp()
    {

    }

    public function testWelcome()
    {
        $text = file_get_contents('http://local.kohana.com/welcome');
        $this->assertEquals("Hello, the sample/init.php is running <br/>\nhello, world!", $text);
    }

    public function testSample()
    {
        $text = file_get_contents('http://local.kohana.com/sample');
        $this->assertEquals("Hello, the sample/init.php is running <br/>\nSample Controller is Running <br/>\n", $text);
    }


    public function tearDown()
    {

    }
}