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
		$categories = ['ก้นครัว','สัตว์','กล้อง','การ์ตูน','เทคโนโลยี','วัยรุ่น','วิทยาศาสตร์'];

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
