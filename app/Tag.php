<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {

	//

	protected $table = 'tags';

	public function getCategory() {
		return $this->belongsTo('App\Category','category_id');
	}

	public function getTopics() {
		return $this->hasMany('App\TopicTag');
	}

}
