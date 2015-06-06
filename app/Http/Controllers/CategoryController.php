<?php namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;

use App\Category as category;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$category = category::all();
		return view('category.index')->with('category', $category);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('category.edit');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Request::all();
		if($data['name'] == '') return redirect(route('category.edit'))->with('message', 'Invalid Name');
		
		if($data['old_id'] != '')
		{
			$category = category::find($data['old_id']);
			$message = 'Edit User ID : '.$category->id;
		}
		else
		{
			$category = new category;
			$message = 'Create New Category';
		}
		$category->name = $data['name'];
		$category->save();
		
		return redirect(route('category.index'))->with('message', $message);
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
		$category = category::find($id);
		return view('category.edit')->with('category', $category);
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
