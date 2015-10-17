<?php namespace App\Repos;

use Auth;

class AdminRepo {
	
	/**
	 * @return boolean about status of admin 
	 */

	static public function isAdmin(){

		return (Auth::user()->role == 'administrator') ? true : false;

	}

}