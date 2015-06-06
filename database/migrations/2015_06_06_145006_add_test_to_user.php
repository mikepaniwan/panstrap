<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\User as User;

class AddTestToUser extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$users = [
			['name' => 'admin', 'rank' => 'admin', 'email' => 'admin@test.com' ,'password' => bcrypt('123456')],
			['name' => 'mike', 'rank' => 'user', 'email' => 'mike@test.com', 'password' => bcrypt('123456')],
			['name' => 'earth', 'rank' => 'user', 'email' => 'earth@test.com', 'password' => bcrypt('123456')]
		];

		foreach ($users as $user) {
			$new_user = new User;
			$new_user->name = $user['name'];
			$new_user->rank = $user['rank'];
			$new_user->email = $user['email'];
			$new_user->password = $user['password'];
			$new_user->save();
		}
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
