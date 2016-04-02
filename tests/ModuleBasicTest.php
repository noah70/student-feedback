<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ModuleBasicTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testModule()
    {
        $module = factory(App\Models\Modules::class)->create();
        $this->seeInDatabase('modules', ['type' => $module->type]);
    }
}
