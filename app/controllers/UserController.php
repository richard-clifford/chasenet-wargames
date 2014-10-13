<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
		View::make('user.dashboard');
	}

	public function login(){

		$arrData = Input::all();

		$user = User::where('email', '=', $arrData['email'])->get();

		if(!$user->isEmpty()) {

			if(Hash::check($arrData['password'], $user->first()->password)) {

				Session::put('username', $arrData['email']);
				Session::put('logged_in', true);
			}

		} else {

			$objUser = new User();

			$objUser->email = $arrData['email'];
			$objUser->name = $arrData['email'];
			$objUser->password = Hash::make($arrData['password']);

			$objUser->save();

			Session::put('username', $arrData['email']);
			Session::put('logged_in', true);
		}

		return Redirect::route('chasenet.home');
	}

	public function logout() {
		Session::flush();
		return Redirect::route('chasenet.home');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create() {

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

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
