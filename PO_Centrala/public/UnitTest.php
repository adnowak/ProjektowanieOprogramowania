<?php
use PHPUnit\Framework\TestCase;
use src\app\Controllers\RaportController;
require_once dirname(__FILE__) . '/../src/app/Model/Entities/Package.php';

class UnitTest extends TestCase
{
    public function testPushAndPop()
    {
        //$instance = new Package();
        $stack = [];
        $this->assertSame(0, count($stack));

        array_push($stack, 'foo');
        $this->assertSame('foo', $stack[count($stack)-1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }
}