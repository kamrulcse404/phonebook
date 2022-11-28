<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactListTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_contact_list()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
}
