<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Topic as Topic;

class AddTestToTopic extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$topics = [
			['user_id'=>2,'subject'=>'เลี้ยงสัตว์อย่างไรให้ได้ดี','description'=>'ทำไมเลี้ยงหมาแล้วเป็นหมา เลี้ยงแมวแล้วเป็นแมวคะ ?'],
			['user_id'=>3,'subject'=>'ไม่รู้จะตั้งคำถามอะไรดี','description'=>'พูดๆไปก็เป็นเรื่องยากที่จะตั้งคำถาม มันยากลำบากเหลือเกิน ?'],
		];

		foreach($topics as $topic) {
			$new_topic = new Topic;
			$new_topic->user_id = $topic['user_id'];
			$new_topic->subject = $topic['subject'];
			$new_topic->description = $topic['description'];
			$new_topic->save();
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
