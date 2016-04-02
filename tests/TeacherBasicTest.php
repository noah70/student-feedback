<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TeacherBasicTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTeacher()
    {
        $teacher = factory(App\Models\Teachers::class)->create();
        $this->seeInDatabase('teachers', ['email' => $teacher->email]);
    }
}
