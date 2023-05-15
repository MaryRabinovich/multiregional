<?php

namespace Modules\MultiregionalTests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MultiregionalCookieTest extends TestCase
{
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
}
