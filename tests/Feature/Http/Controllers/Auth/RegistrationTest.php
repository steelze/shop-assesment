<?php

use App\Enums\RoleEnum;

test('new users can register as customer', function () {
    $response = $this->postJson('api/v1/auth/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'role' => RoleEnum::CUSTOMER->value,
    ]);

    $response->assertOk()
        ->assertJsonStructure([
            'status',
            'data' => [
                'user',
                'token',
            ]
        ]);

    $this->assertDatabaseHas('users', ['email' => 'test@example.com', 'role' => RoleEnum::CUSTOMER->value]);
});

test('new users can register as supplier', function () {
    $response = $this->postJson('api/v1/auth/register', [
        'name' => 'Test User',
        'email' => 'test@example.com',
        'password' => 'password',
        'password_confirmation' => 'password',
        'role' => RoleEnum::SUPPLIER->value,
    ]);

    $response->assertOk()
        ->assertJsonStructure([
            'status',
            'data' => [
                'user',
                'token',
            ]
        ]);

    $this->assertDatabaseHas('users', ['email' => 'test@example.com', 'role' => RoleEnum::SUPPLIER->value]);
});

