<?php namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;

use App\User as member;

class MemberController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$member = member::all();
		return view('member.index')->with('member', $member);
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
		
		$member = member::find($data['old_id']);
		$member->name = $data['name'];
		$member->img = $data['img'];
		$member->save();
		
		return redirect(route('member.index'))->with('message', 'Edit Member ID : '.$member->id);
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
		$member = member::find($id);
		return view('member.edit')->with('member', $member);
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
