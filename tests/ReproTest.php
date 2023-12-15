<?php

class ReproTest extends \PHPUnit\Framework\TestCase
{

    use \Mockery\Adapter\Phpunit\MockeryPHPUnitIntegration;

    protected function setUp(): void
    {
        parent::setUp();
        var_dump("setUp()");
    }

    public function test_repro()
    {
        Mockery::mock(\Floppy012\PhpunitMockeryBug\MockClass::class)
            ->shouldReceive('test')
            ->once();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        var_dump("tearDown()");
    }

}