<?php

namespace Disque\Test\Command;

use Disque\Command\CommandInterface;
use Disque\Command\Ping;
use PHPUnit_Framework_TestCase;

class PingTest extends PHPUnit_Framework_TestCase
{
    public function testInstance()
    {
        $c = new Ping();
        $this->assertInstanceOf(CommandInterface::class, $c);
    }

    public function testGetCommand()
    {
        $c = new Ping();
        $result = $c->getCommand();
        $this->assertSame('PING', $result);
    }

    public function testIsBlocking()
    {
        $c = new Ping();
        $result = $c->isBlocking();
        $this->assertFalse($result);
    }

    public function testBuild()
    {
        $c = new Ping();
        $c->setArguments([]);
        $result = $c->getArguments();
        $this->assertSame([], $result);
    }

    public function testParse()
    {
        $c = new Ping();
        $result = $c->parse('test');
        $this->assertSame('test', $result);
    }
}
