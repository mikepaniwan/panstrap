<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $table = 'comments';

	public function getTopic() {
		return $this->belongsTo('App\Topic');
	}

	public function getUser() {
		return $this->belongsTo('App\User');
	}
	
}
