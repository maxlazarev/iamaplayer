<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 14.12.14
 * Time: 15:04
 */

class LoginController extends BaseController{
    public function login(){
        $redirectUrl = Input::get('r');
        return View::make("auth.login")->with('redirectUrl', $redirectUrl);
    }

    public function submitLogin(){
        $data = Input::all();
        if (Auth::attempt(array('email' => $data['email'], 'password' => $data['password'])))
        {
            if(Input::has('r')){
                $redirectUrl = Input::get('r');
                return Redirect::to($redirectUrl);
            }
            return Redirect::intended();
        }
        else
        {
            return View::make('auth.login')->with('failed', true);
        }
    }

    public function loginFacebook()
    {
        $facebook = new Facebook(Config::get('facebook'));
        $params = array(
            'redirect_uri' => url('/login/facebook/callback'),
            'scope' => 'email'
        );

        return Redirect::away($facebook->getLoginUrl($params));
    }

    public function loginFacebookCallback()
    {
        $code = Input::get('code');

        if (strlen($code) == 0) {
            return Redirect::to('/')->with('message', 'There was an error communicating with Facebook');
        }
        $facebook = new Facebook(Config::get('facebook'));
        $uid = $facebook->getUser();

        if ($uid == 0) return Redirect::to('/')->with('message', 'There was an error');

        $me = $facebook->api('/me');
        dd($me);
        /*$profile = Profile::whereUid($uid)->first();
        if (empty($profile)) {

            $user = new User;
            $user->name = $me['first_name'].' '.$me['last_name'];
            $user->email = $me['email'];
            $user->photo = 'https://graph.facebook.com/'.$me['username'].'/picture?type=large';

            $user->save();

            $profile = new Profile();
            $profile->uid = $uid;
            $profile->username = $me['username'];
            $profile = $user->profiles()->save($profile);
        }

        $profile->access_token = $facebook->getAccessToken();
        $profile->save();

        $user = $profile->user;*/

        Auth::login($user);

        return Redirect::to('/')->with('message', 'Logged in with Facebook');
    }

    public function signin()
    {
        if (!Auth::check())
        {
            $redirectUrl = Input::get('r');
            return View::make('auth.signin')->with('redirectUrl', $redirectUrl);
        }else{
            return Redirect::intended();
        }
    }

    public function submitSignin(){
        $data = Input::all();
        $validator = Validator::make($data, Player::$validationRules);
        if ($validator->fails()){
            return Redirect::back()->withErrors($validator)->withInput();
        }


        $player = new Player();
        $player->email = $data['email'];
        $player->password = Hash::make($data['password']);
        $player->first_name = $data['first_name'];
        $player->last_name = $data['last_name'];
        $player->save();

        if (Auth::attempt(array('email' => $data['email'], 'password' => $data['password'])))
        {
            $redirectUrl = Input::get('r');
            if (isset($redirectUrl))
            {
                return Redirect::to($redirectUrl);
            }
            return Redirect::intended();
        }
    }

    public function logout(){
        Auth::logout();
        $redirectUrl = Input::get('r');
        if (isset($redirectUrl))
        {
            return Redirect::to($redirectUrl);
        }
        return Redirect::intended();
    }
} 