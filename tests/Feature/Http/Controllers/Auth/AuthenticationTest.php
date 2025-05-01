<?php

use App\Models\User;
use Laravel\Sanctum\Sanctum;

test('users can authenticate with correct credentials', function () {
    $user = User::factory()->create();

    $response = $this->postJson('api/v1/auth/login', [
        'email' => $user->email,
        'password' => 'password',
    ]);

    $response->assertOk()
        ->assertJsonStructure([
            'status',
            'data' => ['user', 'token']
        ]);

    expect($response['data']['user']['id'])->toBeInt()->toBe($user->id);
});

test('users can not authenticate with empty credentials', function () {
    $response = $this->postJson('api/v1/auth/login', ['email' => '', 'password' => '']);
    $response->assertUnprocessable()
        ->assertInvalid(['email'])
        ->assertJsonStructure(['status', 'errors']);

    $this->assertGuest();
});

test('users can not authenticate with invalid password', function () {
    $user = User::factory()->create();

    $response = $this->postJson('api/v1/auth/login', [
        'email' => $user->email,
        'password' => 'wrong-password',
    ]);

    $response->assertUnprocessable()
        ->assertInvalid(['email'])
        ->assertJsonStructure(['status', 'errors']);

    $this->assertGuest();
});

test('authenticated user can logout', function () {
    $user = User::factory()->create();

    Sanctum::actingAs($user);
    $response = $this->postJson('api/v1/auth/logout');
    $response->assertNoContent();
});