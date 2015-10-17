<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ReviewTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testReview()
    {
        $user = factory(App\User::class)->make();

		$this->actingAs($user)
             ->visit('/reviews/create')
             ->withSession(['agent' => 'TestSuite'])
	         ->type('info@admin.com', 'email')
	         ->type('Administrator','name')
	         ->type('Best Place','location')
	         ->type('This place is awesome','content')
	         ->press('Submit')
	         ->seePageIs('/');
    }
}
