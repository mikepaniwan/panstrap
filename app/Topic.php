<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model {

	//
	protected $table = 'topics';

	public function getUser() {
		return $this->belongsTo('App\User','user_id');
	}

	public function getComments() {
		return $this->hasMany('App\Comment');
	}

	public function getTopicTags() {
		return $this->hasMany('App\TopicTag');
	}

	public function getTrend() {
		return $this->hasOne('App\Trend');
	}

}
