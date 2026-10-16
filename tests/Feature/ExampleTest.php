<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_authenticated_user_can_view_the_create_student_form(): void
    {
        $this->actingAs(User::factory()->create());

        $response = $this->get('/students/create');

        $response->assertOk()
            ->assertSee('Tambah Siswa')
            ->assertSee('-- Pilih Jenis Kelamin --');
    }
}
