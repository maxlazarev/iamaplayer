<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 07.01.15
 * Time: 10:37
 */

class CompetitionsTest extends TestCase{
    public function testCompetitionOwnerRelationship(){
        $competition = Competition::find(4);
        $this->assertEquals($competition->admin->email, 'maxlazarev@gmail.com');
    }
}