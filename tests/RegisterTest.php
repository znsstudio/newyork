<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterTest extends TestCase
{
  
    public function __construct(){
        $this->baseUrl = 'http://www.newyork.local';
    }

    /**
     * Test if user redirects to login
     *
     * @return void
     */
    public function testApplication()
    {
        $response = $this->call('GET', '/');
        $this->assertEquals(302, $response->status());
    }

    /**
     * Register test
     *
     * @return void
     */
    public function testRegister()
    {
        $user = factory(App\User::class)->make();

        $this->visit('/auth/register')
         ->type($user->name, 'name')
         ->type($user->email, 'email')
         ->type($user->password,'password')
         ->type($user->password,'password_confirmation')
         ->press('Register')
         ->seePageIs('/auth/login');
    }

    /**
     * Login test
     *
     * @return void
     */
    public function testLogin()
    {
        $this->visit('/auth/login')
         ->type('info@admin.com', 'email')
         ->type('admin','password')
         ->press('Login')
         ->seePageIs('/');
    }

    public function testAdminInUsers()
    {
        $this->seeInDatabase('users', ['email' => 'info@admin.com']);
    }

}
