<?php

beforeEach(function() {
    var_dump("beforeEach()");
});

afterEach(function() {
    var_dump("afterEach()");
});

test('test_repro', function () {
    Mockery::mock(\Floppy012\PhpunitMockeryBug\MockClass::class)
        ->shouldReceive('test')
        ->once();
});
