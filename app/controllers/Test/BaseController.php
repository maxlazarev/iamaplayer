<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
        if (Auth::check())
        {
            View::share('authData', Auth::user());
        }
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}

	}

}
