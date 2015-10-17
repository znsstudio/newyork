<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\User::create([
            'role' => 'administrator',
        	'name' => 'Administrator',
        	'email' => 'info@admin.com',
        	'password' => bcrypt('admin'),
        	'last_agent' => md5(date('U'))
    	]);
    }
}
