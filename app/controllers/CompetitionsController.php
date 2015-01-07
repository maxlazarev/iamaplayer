<?php

class CompetitionsController extends \BaseController {

	/**
	 * Display a listing of competitions
	 *
	 * @return Response
	 */
	public function index()
	{
        $perPage = isset(Input::all()['perPage']) ? Input::all()['perPage'] : 10;
		$competitions = Competition::paginate($perPage);

		return $competitions->toJson();
	}

	/**
	 * Show the form for creating a new competition
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('competitions.create');
	}

	/**
	 * Store a newly created competition in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Competition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Competition::create($data);

		return Redirect::route('competitions.index');
	}

	/**
	 * Display the specified competition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$competition = Competition::findOrFail($id);

		return View::make('competitions.show', compact('competition'));
	}

	/**
	 * Show the form for editing the specified competition.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$competition = Competition::find($id);

		return View::make('competitions.edit', compact('competition'));
	}

	/**
	 * Update the specified competition in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$competition = Competition::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Competition::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$competition->update($data);

		return Redirect::route('competitions.index');
	}

	/**
	 * Remove the specified competition from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Competition::destroy($id);

		return Redirect::route('competitions.index');
	}

}
