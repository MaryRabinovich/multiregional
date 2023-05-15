<?php

namespace Modules\MultiregionalTests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Modules\Multiregional\RegionSeeder;
use Tests\TestCase;

class MultiregionalCookieTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        $this->seed(RegionSeeder::class);
    }

    /** @test */
    public function home_route_is_accessible_when_no_cookie_is_set(): void
    {
        $this->get('/')->assertOk();
    }

    /** @test */
    public function home_route_redirects_to_region_route_when_cookie_is_set()
    {
        $this->withCookie('multiregional', 'moscow')
            ->get('/')
            ->assertRedirect('/regions/moscow');
    }

    /** @test */
    public function region_route_sets_cookie()
    {
        $this->get('/regions/moscow')->assertCookie('multiregional', 'moscow');
    }

    /** @test */
    public function a_regions_route_with_incorrect_region_redirects_to_home_route()
    {
        $this->get('/regions/blablabla')->assertRedirect('/');
    }
}
