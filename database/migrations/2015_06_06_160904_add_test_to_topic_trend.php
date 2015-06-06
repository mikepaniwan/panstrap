<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Trend as Trend;

class AddTestToTopicTrend extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$trends = [1,2];

		foreach ($trends as $trend) {
			$new_trend = new Trend;
			$new_trend->topic_id = $trend;
			$new_trend->save();
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
