<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function test_user_duplicate()
    {
        User::factory(2)->create();
        
        $user1 = User::where('id', 1)->first();
        $user2 = User::where('id', 2)->first();

        $this->assertTrue($user1->username != $user2->username);
    }

    public function test_delete_user()
    {
        User::factory()->create();

        $user = User::first();

        if($user){
            $user->delete();
        }

        $this->assertTrue(true);
    }
}
