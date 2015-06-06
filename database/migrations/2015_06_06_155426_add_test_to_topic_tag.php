<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\TopicTag as TopicTag;

class AddTestToTopicTag extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		$topic_tags = [
			['topic_id' => 1 , 'tag_id' => [1,7,11]],
			['topic_id' => 2 , 'tag_id' => [5,25,27,29]]
		];

		foreach($topic_tags as $topic) {
			foreach($topic['tag_id'] as $tags) {
				$new_topic_tag = new TopicTag;
				$new_topic_tag->topic_id = $topic['topic_id'];
				$new_topic_tag->tag_id = $tags;
				$new_topic_tag->save();
			}
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
