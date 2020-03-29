<?php

namespace Tests\Feature;

use Tests\TestCase;

class VisitSiteTest extends TestCase
{
    /** @test */
    public function can_visit_main_page()
    {
        $this->withoutExceptionHandling();

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertViewIs('index');
    }
}
