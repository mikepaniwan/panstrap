<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Comment as Comment;

class AddTestToComment extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$comments = [
			['topic_id' => 1 , 'user_id' => 2 ,'description' => 'ทดสอบการ Comment จ๊ะ'],
			['topic_id' => 1 , 'user_id' => 3 ,'description' => 'ฝากร้านด้วยจ้า'],
		];

		foreach($comments as $comment) {
			$new_comment = new Comment;
			$new_comment->topic_id = $comment['topic_id'];
			$new_comment->user_id = $comment['user_id'];
			$new_comment->description = $comment['description'];
			$new_comment->save();
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
