<?php

namespace Tests\Unit;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use PHPUnit\Framework\TestCase;

class UserModelFunctionalityTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_form_validation_with_valid_data()
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

        $validator = Validator::make($data, User::rules());

        $this->assertTrue($validator->passes());
    }

    public function test_form_validation_with_invalid_data()
    {
        $data = [
            'name' => '', // Nombre vacío
            'lastName' => '', // Apellido vacío
            'address' => '', // Dirección vacía
            'email' => 'invalid-email', // Email inválido
            'username' => '', // Username vacío
            'password' => '123', // Contraseña muy corta
            'rol' => '', // Rol vacío
            'state' => '', // Estado vacío
            'balance' => -10, // Balance negativo
        ];

        $validator = Validator::make($data, User::rules());

        $this->assertFalse($validator->passes());
        $this->assertArrayHasKey('name', $validator->errors()->toArray());
        $this->assertArrayHasKey('lastName', $validator->errors()->toArray());
        $this->assertArrayHasKey('address', $validator->errors()->toArray());
        $this->assertArrayHasKey('email', $validator->errors()->toArray());
        $this->assertArrayHasKey('username', $validator->errors()->toArray());
        $this->assertArrayHasKey('password', $validator->errors()->toArray());
        $this->assertArrayHasKey('rol', $validator->errors()->toArray());
        $this->assertArrayHasKey('state', $validator->errors()->toArray());
        $this->assertArrayHasKey('balance', $validator->errors()->toArray());
    }
}
