<?php

class ParticipantsController extends \BaseController {

	/**
	 * Display a listing of participants
	 *
	 * @return Response
	 */
	public function index()
	{
		$participants = Participant::all();

		return View::make('participants.index', compact('participants'));
	}

	/**
	 * Show the form for creating a new participant
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('participants.create');
	}

	/**
	 * Store a newly created participant in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Participant::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Participant::create($data);

		return Redirect::route('participants.index');
	}

	/**
	 * Display the specified participant.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$participant = Participant::findOrFail($id);

		return Response::json($participant);
	}

	/**
	 * Show the form for editing the specified participant.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$participant = Participant::find($id);

		return View::make('participants.edit', compact('participant'));
	}

	/**
	 * Update the specified participant in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$participant = Participant::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Participant::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$participant->update($data);

		return Redirect::route('participants.index');
	}

	/**
	 * Remove the specified participant from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Participant::destroy($id);

		return Redirect::route('participants.index');
	}

}
