<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 18.12.14
 * Time: 19:17
 */
if ( !isset($_SESSION))
    $_SESSION = array();

class AuthTest extends TestCase{

    public function testUnsuccessfulLogin(){
        $credentials = array(
            'email'=>'invalid@email.address',
            'password'=>'1',
            'csrf_token' => csrf_token());
        $this->call('POST', 'api/login', $credentials);
        $this->assertResponseStatus(401);
    }

    public function testUnsuccessfulLogout(){
        $this->call('GET', 'api/logout');
        $this->assertResponseStatus(401);
    }

    public function testSuccessfulLogin(){
        Session::start();
        $credentials = array(
            'email'=>'maxlazarev@gmail.com',
            'password'=>Hash::make('1234'),
            'csrf_token' => csrf_token());
        $response = $this->call('POST', 'api/login', $credentials);
        $result = json_decode($response->getContent(), true);
        $this->assertResponseStatus(200);
        $this->assertEquals($credentials['email'], $result['email']);

    }

    public function testSuccessfulLogout(){
        $this->testSuccessfulLogin();
        $this->action('GET', 'AuthController@logout');
        $this->assertResponseStatus(200);
    }

    public function testUnsuccessfulSignUpRequiredDataMissing()
    {
        $credentials = array(
            'email'=>'invalidemail.address',
            'password'=>'1234567',
            'passwordConfirm'=>'1',
            'firstName'=>'',
            'lastName'=>'',
            'csrf_token' => csrf_token());
        $response = $this->call('POST', 'api/signup', $credentials);
        $this->assertNotNull(json_decode($response->getContent())->email);
        $this->assertResponseStatus(400);
    }

    public function testUnsuccessfulSignUpPasswordsDontMatch()
    {
        $credentials = array(
            'email'=>'invalid@email.address',
            'password'=>'1234567',
            'passwordConfirm'=>'1',
            'firstName'=>'vasea',
            'lastName'=>'petya',
            'csrf_token' => csrf_token());
        $response = $this->call('POST', 'api/signup', $credentials);

        $this->assertNotNull(json_decode($response->getContent()) == "passwords don't match");
        $this->assertResponseStatus(400);
    }

    public function testSuccessfulSignUp()
    {
        $credentials = array(
            'email'=>'valid@email.address',
            'password'=>Hash::make('1234567'),
            'passwordConfirm'=>Hash::make('1234567'),
            'firstName'=>'vasea',
            'lastName'=>'petya',
            'admin'=>false,
            'csrf_token' => csrf_token());
        $response = $this->call('POST', 'api/signup', $credentials);
        $this->assertNotNull(json_decode($response->getContent()) == "player created");
        $this->assertResponseStatus(200);

        $response = $this->action('POST', 'AuthController@login', $credentials);
        $result = json_decode($response->getContent(), true);
        $this->assertResponseStatus(200);
        $this->assertEquals($credentials['email'], $result['email']);
    }

    public function testEveryRequestHasAuthData(){
        $player = Player::all()->first();
        Auth::login($player);
        $response = $this->call('GET', 'api/teams');
        $teams = json_decode($response->getContent());
        $this->assertNotNull($teams);

    }
} 