<?php

class RoundsController extends \BaseController {

	/**
	 * Display a listing of rounds
	 *
	 * @return Response
	 */
	public function index()
	{
		$rounds = Round::all();

		return View::make('rounds.index', compact('rounds'));
	}

	/**
	 * Show the form for creating a new round
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('rounds.create');
	}

	/**
	 * Store a newly created round in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Round::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Round::create($data);

		return Redirect::route('rounds.index');
	}

	/**
	 * Display the specified round.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$round = Round::findOrFail($id);

		return View::make('rounds.show', compact('round'));
	}

	/**
	 * Show the form for editing the specified round.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$round = Round::find($id);

		return View::make('rounds.edit', compact('round'));
	}

	/**
	 * Update the specified round in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$round = Round::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Round::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$round->update($data);

		return Redirect::route('rounds.index');
	}

	/**
	 * Remove the specified round from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Round::destroy($id);

		return Redirect::route('rounds.index');
	}

}
