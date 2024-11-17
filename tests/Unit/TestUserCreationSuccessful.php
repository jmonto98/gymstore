<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class TestUserCreationSuccessful extends TestCase
{
    public function test_user_creation_successful()
    {
        $data = [
            'name' => 'Daniel',
            'lastName' => 'Posada',
            'address' => '123 Main St.',
            'email' => 'daniel@example.com',
            'username' => 'daniel123',
            'password' => 'securePassword123',
            'rol' => 'admin',
            'state' => 'ACTIVE',
            'balance' => 1000,
        ];

        $user = User::create([
            'name' => $data['name'],
            'lastName' => $data['lastName'],
            'address' => $data['address'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'rol' => $data['rol'],
            'state' => $data['state'],
            'balance' => $data['balance'],
        ]);

        $this->assertInstanceOf(User::class, $user);
        $this->assertDatabaseHas('users', [
            'email' => $data['email'],
            'username' => $data['username'],
        ]);
    }
}
