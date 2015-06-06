<?php namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;

use App\User as user;
use Auth;

class MemberController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$user = user::all();
		return view('member.index')->with('user', $user);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$data = Request::all();
		if($data['name'] == '') return redirect(route('member.edit'))->with('message', 'Invalid Username');
		
		$user = user::find($data['old_id']);
		$user->name = $data['name'];
		$user->img = $data['img'];
		$user->save();
		
		return redirect(route('member.index'))->with('message', 'Edit User ID : '.$user->id);
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
		$user = user::find($id);
		return view('member.edit')->with('user', $user);
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
		$user = user::find($id);
		$user->delete();
		return redirect()->back()->with('message', 'Delete User id : '.$id);
	}

}
