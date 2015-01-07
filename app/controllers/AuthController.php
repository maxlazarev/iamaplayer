<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 17.12.14
 * Time: 23:32
 */

class AuthController extends \BaseController{
    public function login(){
        $data = Input::all();
        if (!isset($data['email']) || !isset($data['password']))
        {
            return Response::make('Failed', 401);
        }
        if(Auth::viaRemember())
        {
            return Response::make('Already logged', 400);
        }
        if (Auth::attempt(array('email' => $data['email'], 'password' => $data['password']), isset($data['rememberMe'])? $data['rememberMe'] : false))
        {
            return Auth::user();
        }else{
            return Response::make('Failed', 401);
        }
    }

    public function logout(){
        Auth::logout();
        return Response::make('Logout', 200);
    }

    public function signUp()
    {
        $data = Input::all();
        $validator = Validator::make($data, Player::$validationRules);
        if ($validator->fails()){
            return Response::json($validator->errors(), 400);
        }
        if ($data['password'] != $data['passwordConfirm'])
        {
            return Response::json("passwords don't match", 400);
        }

        $player = new Player();
        $player->email = $data['email'];
        $player->password = Hash::make($data['password']);
        $player->firstName = $data['firstName'];
        $player->lastName = $data['lastName'];
        $player->save();

        Auth::login($player);
        Response::json("player created", 200);
    }

    public function fbLogin()
    {
        $facebook = new Facebook(Config::get('facebook'));
        $params = array(
            'redirect_uri' => route('fbCallback'),
            'scope' => 'email'
        );

        return Redirect::away($facebook->getLoginUrl($params));
    }

    public function fbCallback()
    {
        $code = Input::get('code');

        if (strlen($code) == 0) {
            return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
        }
        $facebook = new Facebook(Config::get('facebook'));
        $uid = $facebook->getUser();

        if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');

        $me = $facebook->api('/me');
        $player = Player::where('email', '=', $me['email'])->get()->first();
        if (!isset($player))
        {
            $player = new Player();
        }
        $player->email = $me['email'];
        $player->firstName = $me['first_name'];
        $player->lastName = $me['last_name'];
        $player->photo = 'https://graph.facebook.com/'.$me['id'].'/picture?type=large';
        $player->save();

        Auth::login($player);
        return Response::json('Logged in via facebook', 200);
    }

}