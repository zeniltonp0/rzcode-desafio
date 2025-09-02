<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Laravel\actingAs;
use function Pest\Laravel\get;

uses(RefreshDatabase::class);

test('a página de login pode ser exibida para um visitante', function () {
    get('/login')->assertStatus(200);
});

test('usuários autenticados não podem ver a página de login', function () {
    $user = User::factory()->create();
    actingAs($user);

    $response = get('/login');

    $response->assertRedirect('/dashboard');
});
