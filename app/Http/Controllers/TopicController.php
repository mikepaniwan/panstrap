<?php namespace App\Http\Controllers;

use Request;

use App\Http\Controllers\Controller;

use App\Category as Category;
use App\Tag as Tag;
use App\Topic as Topic;
use App\TopicTag as TopicTag;

class TopicController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::all();
		return view('topic.create', ['categories' => $categories]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$inputs = Request::all();
		$topic = new Topic;
		$topic->user_id = 2;
		$topic->subject = $inputs['subject'];
		$topic->description = $inputs['description'];
		$topic->save();
		foreach ($inputs['tags'] as $tagId) {
			$topicTag = new TopicTag;
			$topicTag->topic_id = $topic->id;
			$topicTag->tag_id = $tagId;
			$topicTag->save();
		}

		return 'Completed!';
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$message = '';
		$topics = Topic::all();
		foreach ($topics as $topic) {
			$message .= $topic->subject . ':' . $topic->description . ':';
			foreach ($topic->getTopicTags as $topicTag) {
				$message .= $topicTag->getTag->name . ',';
			}
			$message .= '<br>';
		}
		return $message;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
