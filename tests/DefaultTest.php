<?php
/**
 * @created 2013-11-11 20:35
 * @author Pavel Machekhin <pavel.machekhin@gmail.com>
 */

class DefaultTest extends PHPUnit_Framework_TestCase
{
    public function testGreeting()
    {
        $greeting = "Hello, world.";

        $this->assertTrue($greeting == 'Hello, world');
    }
}