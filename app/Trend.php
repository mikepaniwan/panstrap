<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Trend extends Model {

	//
	protected $table = 'trends';

	public function getTopic() {
		return $this->belongsTo('App\Topic','topic_id');
	}

}
