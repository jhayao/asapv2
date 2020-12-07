<?php

namespace Tests\Feature\Http\Controllers;

use App\Student;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * @see \App\Http\Controllers\StudentController
 */
class StudentControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function index_displays_view()
    {
        $students = Student::factory()->count(3)->create();

        $response = $this->get(route('student.index'));

        $response->assertOk();
        $response->assertViewIs('student.index');
    }


    /**
     * @test
     */
    public function create_displays_view()
    {
        $response = $this->get(route('student.create'));

        $response->assertOk();
        $response->assertViewIs('post.create');
    }
}
