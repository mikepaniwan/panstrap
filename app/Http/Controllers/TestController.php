<?php namespace App\Http\Controllers;

use App\User as User;

class TestController extends Controller {

	public function getUser() {
		return User::all();
	}

}
