<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 09.01.15
 * Time: 13:52
 */

class StageTest extends TestCase{

    public function testCompetitionRelationship()
    {
        $stage = Stage::find(1);
        $this->assertEquals($stage->ofCompetition->name, 'Iamaplayer Cup 4');
    }

} 