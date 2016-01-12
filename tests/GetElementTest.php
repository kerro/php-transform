<?php

namespace tests\TomPHP\Transform;

use PHPUnit_Framework_TestCase;
use TomPHP\Transform as T;

final class GetElementTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function it_returns_value_of_the_named_array_entry()
    {
        $fn = T\getElement('name');

        $this->assertSame('Tom', $fn(['name' => 'Tom']));
    }

    /** @test */
    public function it_returns_value_of_a_nested_array_entry()
    {
        $fn = T\getElement(['user', 'name']);

        $this->assertSame('Tom', $fn(['user' => ['name' => 'Tom']]));
    }
}
