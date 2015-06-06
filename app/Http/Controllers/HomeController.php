<?php namespace App\Http\Controllers;

use App\Trend as Trend;
use App\Category as Category;

class HomeController extends Controller {

	public function index()
	{
		$trends = Trend::all();
		$categories = Category::all();

		return view('home')->with('trends',$trends)->with('categories',$categories);
	}

	public function redirectIndex() {
		return redirect(route('home.index'));
	}

	public function getCategory($id) {
		$category = Category::find($id);
		$topics = [];


		foreach($category->getTags as $tag) {
			if(count($tag->getTopics) > 0) {
				foreach($tag->getTopics as $topic) {
					$new_topic = [];
					$new_topic['topic'] = $topic->getTopic;
					$new_topic['tag'] = [];
					foreach ($topic->getTopic->getTopicTags as $tag) {
						array_push($new_topic['tag'],$tag->getTag->name);
					}
					array_push($topics, $new_topic);
				}
			}
		}

		//return $topics[0];


		return view('category')->with('category',$category)->with('topics',$topics);
	}

}
