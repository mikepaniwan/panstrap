<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TopicTag extends Model {

	//
	protected $table = 'topic_tags';

	public function getTopic() {
		return $this->belongsTo('App\Topic','topic_id');
	}

	public function getTag() {
		return $this->belongsTo('App\Tag','tag_id');
	}

}
