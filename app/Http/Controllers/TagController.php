<?php namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;

use App\Tag as tag;
use App\TopicTag as topictag;

class TagController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tag = tag::all();
		return view('tag.index')->with('tag', $tag);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tag.edit');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Request::all();
		if($data['name'] == '') return redirect(route('tag.edit'))->with('message', 'Invalid Name');
		
		if($data['old_id'] != '')
		{
			$tag = tag::find($data['old_id']);
			$message = 'Edit User ID : '.$tag->id;
		}
		else
		{
			$tag = new tag;
			$message = 'Create New tag';
		}
		$tag->category_id = $data['category_id'];
		$tag->name = $data['name'];
		$tag->save();
		
		return redirect(route('tag.index'))->with('message', $message);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tag = tag::find($id);
		return view('tag.edit')->with('tag', $tag);
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
