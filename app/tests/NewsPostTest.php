<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 27.12.14
 * Time: 15:57
 */
class NewsPostTest extends TestCase {
    public function testRetrievingAllNews(){
        $response = $this->call('GET', 'api/news');
        $this->assertResponseStatus(200);
        $this->assertNotNull($response);
    }
    public function testCreateNewsNoAuth(){
        $data = array(
            'title' => 'testTitle',
            'preview' => 'testPreview',
            'body' => 'testBody'
        );
        $response = $this->call('POST', 'api/news', $data);
        $this->assertResponseStatus(401);
    }

    public function testCreateNewsAuthButNotAdmin(){
        Auth::login(Player::find(2));
        $data = array(
            'title' => 'testTitle',
            'preview' => 'testPreview',
            'body' => 'testBody'
        );
        $response = $this->call('POST', 'api/news', $data);
        $this->assertResponseStatus(401);
    }

    public function testCreateNewsAuth(){
        Auth::login(Player::find(1));
        $data = array(
            'title' => 'testTitle',
            'preview' => 'testPreview',
            'body' => 'testBody'
        );
        $response = $this->call('POST', 'api/news', $data);
        $this->assertResponseStatus(200);
    }
}