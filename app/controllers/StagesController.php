<?php

class StagesController extends \BaseController {

	/**
	 * Display a listing of stages
	 *
	 * @return Response
	 */
	public function index()
	{
		$stages = Stage::all();

		return View::make('stages.index', compact('stages'));
	}

	/**
	 * Show the form for creating a new stage
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('stages.create');
	}

	/**
	 * Store a newly created stage in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Stage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Stage::create($data);

		return Redirect::route('stages.index');
	}

	/**
	 * Display the specified stage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$stage = Stage::findOrFail($id);
        $teams = array();
        foreach ($stage->teams as $team)
        {
            $teams[] = array(
                'id' => $team->pivot->team,
                'name' => $team->name,
                'progress' => $team->pivot->progress
            );
        }
        $rounds = array();
        foreach ($stage->rounds as $round)
        {
            $rounds[] = array(
                'id' => $round->id,
                'name' => $round->name,
            );
        }
        $response = $stage->toArray();

        $response['teams'] = $teams;
        $response['rounds'] = $rounds;

		return Response::json($response);
	}

	/**
	 * Show the form for editing the specified stage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$stage = Stage::find($id);

		return View::make('stages.edit', compact('stage'));
	}

	/**
	 * Update the specified stage in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$stage = Stage::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Stage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$stage->update($data);

		return Redirect::route('stages.index');
	}

	/**
	 * Remove the specified stage from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Stage::destroy($id);

		return Redirect::route('stages.index');
	}

}
