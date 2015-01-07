<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(array('prefix' => 'api'), function() {

    //------Guest

    //News
    Route::resource('news', 'NewsPostsController',
        array('only' => array('index', 'show')));

    Route::post('signup', 'AuthController@signUp');
    Route::post('login', array('uses' => 'AuthController@login', 'as' => 'login'));
    Route::get('fbLogin', array('uses' => 'AuthController@fbLogin', 'as' => 'fbLogin'));
    Route::get('fbCallback', array('uses' => 'AuthController@fbCallback', 'as' => 'fbCallback'));
    Route::resource('teams', 'TeamsController');

    //-------Must be logged
    Route::group(array('before' => 'auth'), function(){

        Route::get('logout', 'AuthController@logout');

        //----Must be admin
        Route::group(array('before' => 'admin'), function(){
            Route::resource('news', 'NewsPostsController',
                array('except' => array('index', 'show', 'create', 'edit')));
        });
    });
});



Route::get('/', function()
{
	return View::make('hello');
});








/*Route::get('/matches', array('uses'=>'MatchController@allMatches', 'as' => 'allMatches'));
Route::get('/matches/add', array('uses'=>'MatchController@addMatchForm', 'as' => 'matchForm'));
Route::post('/matches/add', array('uses'=>'MatchController@addMatch', 'as' => 'addMatch'));
Route::get('/matches/{id}', array('uses'=>'MatchController@singleMatch', 'as' => 'singleMatch'))->where('id', '[1-9][0-9]*');
Route::get('/matches/{id}/edit', array('uses'=>'MatchController@editMatchForm', 'as' => 'editMatch'))->where('id', '[1-9][0-9]*');
Route::post('/matches/{id}/edit', array('uses'=>'MatchController@saveMatch', 'as' => 'saveMatch'))->where('id', '[1-9][0-9]*');
Route::delete('/matches/{id}/delete', array('uses'=>'MatchController@deleteMatch', 'as' => 'deleteMatch'))->where('id', '[1-9][0-9]*');

Route::get('/teams', array('uses'=>'TeamController@allTeams', 'as' => 'allTeams'));
Route::get('/teams/{id}', array('uses'=>'TeamController@singleTeam', 'as' => 'singleTeam'))->where('id', '[1-9][0-9]*');

Route::get('/table', array('uses'=>'TableController@showTable', 'as' => 'showTable'));

Route::get('/signin', array('uses'=>'LoginController@signin', 'as' => 'signin'));
Route::post('/signin', array('uses'=>'LoginController@submitSignin', 'as' => 'submitSignin'));

Route::get('/login', array('uses'=>'LoginController@login', 'as' => 'login'));
Route::get('/login/facebook', array('uses'=>'LoginController@loginFacebook', 'as' => 'loginFacebook'));
Route::get('/login/facebook/callback', array('uses'=>'LoginController@loginFacebookCallback', 'as' => 'loginFacebookCallback'));
Route::post('/login', array('uses'=>'LoginController@submitLogin', 'as' => 'submitLogin'));
Route::get('/logout', array('uses'=>'LoginController@logout', 'as' => 'logout'));*/