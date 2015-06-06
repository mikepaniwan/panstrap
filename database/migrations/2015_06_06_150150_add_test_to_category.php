<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Category as Category;

class AddTestToCategory extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$categories = ['ก้นครัว','กรีนโซน','กล้อง','การ์ตูน','จุตจักร','มาบุญครอง','วัยรุ่น','หว้ากอ'];

		foreach($categories as $cat) {
			$new_category = new Category;
			$new_category->name = $cat;
			$new_category->save();
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
