<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('users/index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users/create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//$input = Input::get('name', 'l_name', 'email', 'password', 'company');

		$input = Input::all();

		$validator = Validator::make(
			array(
				$input
				),
			array(
			'name' => 'required|min:5',
			'l_name' => 'required|min:5',
			'email' => 'required|email',
			'password' => 'required|min:8',
			'company' => 'required|min:5'
			));

		

		if ($validator->fails()) 
		{
			return Redirect::to('/users/create')->withInput(Input::except('password'));
		} else {
			return Redirect::to('index')->with('message', 'Success!');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
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
