<?php

class UserController extends BaseController {

	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		return View::make('users.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
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
		$rules = array(
				'name' => 'required|min:5',
				'l_name' => 'required|min:5',
				'email' => 'required|unique:users',
				'password' => 'required|min:8');		
		
		$validator = Validator::make(Input::all(), $rules);		
		if ($validator->fails())		
		{			
			return Redirect::route('register-user')->withErrors($validator)->with(Input::all());
		} 
		else
		{
			//DB::table('users')->insert($input);	
			$user = new User();
			$user->name = Input::get('name');
			$user->password = Hash::make(Input::get('password'));
			

			if ($user->save()) {
				
				return Redirect::to('/users/login');
			}	
		}
	}

	public function getLogin()
	{
		return View::make('users.login');
	}

	public function postLogin()
	{
		$validator = Validator::make(Input::all(), array(
			'name' => 'required',
			'password' => 'required'
		));

		if ($validator->fails()) {
			return Redirect::route('postLogin')->withErrors('WRONGO KREDENZIALO');
		}
		else
		{
			$remember = (Input::has('remember')) ? true : false;

			$auth = Auth::attempt(array(
				'name' => Input::get('name'),
				'password' => Input::get('password')
			), $remember);

			if ($auth)
			{
				return Redirect::intended('/users');
			}
			else
			{
				return Redirect::route('postLogin')->withErrors($validator);
			}
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
	public function edit()
	{
		return View::make('users.edit');
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
