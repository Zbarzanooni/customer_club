<?php

namespace Tests\Feature\user;


use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;

class testUser extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testInsert()
    {
        $user = factory(User::class)->create();
        $this->assertDatabaseCount('users', 1);
Log::channel();
    }
}
