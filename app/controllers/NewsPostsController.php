<?php

class NewsPostsController extends \BaseController {

	/**
	 * Display a listing of newsposts
	 *
	 * @return Response
	 */
	public function index()
	{
		$newsposts = Newspost::all(array('id','title', 'preview', 'created_at'));

		return Response::json($newsposts);
	}

	/**
	 * Show the form for creating a new newspost
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('newsposts.create');
	}

	/**
	 * Store a newly created newspost in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Newspost::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Newspost::create($data);

		return Response::make('News created', 200);
	}

	/**
	 * Display the specified newspost.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$newspost = Newspost::findOrFail($id);

		return Response::json($newspost);
	}

	/**
	 * Show the form for editing the specified newspost.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$newspost = Newspost::find($id);

		return View::make('newsposts.edit', compact('newspost'));
	}

	/**
	 * Update the specified newspost in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$newspost = Newspost::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Newspost::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$newspost->update($data);

		return Redirect::route('newsposts.index');
	}

	/**
	 * Remove the specified newspost from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Newspost::destroy($id);

		return Redirect::route('newsposts.index');
	}

}
