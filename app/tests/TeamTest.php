<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 17.12.14
 * Time: 21:30
 */
class TeamTest extends TestCase {

    public function testGetTeamsMethod()
    {
        $player = Player::all()->first();
        Auth::login($player);
        $response = $this->call('GET', 'api/teams');
        $teams = json_decode($response->getContent());
        $this->assertNotNull($teams);
    }
}