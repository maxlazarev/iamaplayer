<?php
/**
 * Created by PhpStorm.
 * User: Максим
 * Date: 12.12.14
 * Time: 22:24
 */

class TableController extends BaseController{

    protected $table = array();

    public function showTable() {
        $matches = Match::all();
        $table = array();
        foreach($matches as $match){
            $this->updateLine($match->homeTeam->name, $match->home_scored, $match->away_scored);
            $this->updateLine($match->awayTeam->name, $match->away_scored, $match->home_scored);
        }
        //sort
        $points = array();
        foreach ($this->table as $key => $row)
        {
            $points[$key] = $row['p'];
        }
        array_multisort($points, SORT_DESC, $this->table);


        return View::make('tables.mainTable')->with('table', $this->table);
    }

    protected function updateLine($teamName, $scored, $conceded){

        if($scored>$conceded){
            $result = 3;
        }else if($scored<$conceded){
            $result = 0;
        }else{
            $result = 1;
        }
        if(isset($this->table[$teamName])){
            $this->table[$teamName]['m'] += 1;
            $this->table[$teamName]['w'] += ($result == 3) ? 1 : 0;
            $this->table[$teamName]['l'] += ($result == 0) ? 1 : 0;
            $this->table[$teamName]['d'] += ($result == 1) ? 1 : 0;
            $this->table[$teamName]['s'] += $scored;
            $this->table[$teamName]['c'] += $conceded;
            $this->table[$teamName]['p'] += $result;
        }else{
            $this->table[$teamName]['m'] = 1;
            $this->table[$teamName]['w'] = ($result == 3) ? 1 : 0;
            $this->table[$teamName]['l'] = ($result == 0) ? 1 : 0;
            $this->table[$teamName]['d'] = ($result == 1) ? 1 : 0;
            $this->table[$teamName]['s'] = $scored;
            $this->table[$teamName]['c'] = $conceded;
            $this->table[$teamName]['p'] = $result;

        }
    }

} 