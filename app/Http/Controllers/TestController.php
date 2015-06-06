<?php namespace App\Http\Controllers;

use App\User as User;

class TestController extends Controller {

	public function __construct()
	{
		$this->middleware('admin');
	}

	public function getUser() {
		return User::all();
	}

	public function getUserComment() {
		$user = User::find(2);
		return $user->getComments;
	}

	public function getUserTopic() {
		$user = User::find(2);
		return $user->getTopics;
	}


}
