<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        
    }

    public function testAPostResponse() : void
{
    $response = $this->post('/users', ['name' => 'Robi',
    'email' => 'robimail@mail.hu',
    'password' => 'blabla',
    'member' => false,]);
    $response->assertStatus(200);
}

public function testUserId() : void 
{
    //a make nem rögzíti az adatbázisban a felh-t
    $user = User::factory()->make();
    $this->get('/api/users/' . $user->id)
    ->assertStatus(200);
}

    

}
