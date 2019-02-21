<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelperTest extends TestCase
{
//    /**
//     * @test
//     *
//     * @return void
//     */
//    public function Example()
//    {
//        $this->assertTrue(true);
//    }

    /**
     * @test
     *
     * @return void
     */
    public function set_active_route_should_be_return_active()
    {
        $this->get(route('home'));
        $this->assertEquals('active',set_active_route('home'));
        $this->assertEquals('',set_active_route('about'));
    }
}
