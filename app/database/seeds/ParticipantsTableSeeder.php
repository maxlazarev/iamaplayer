<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ParticipantsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        DB::table('participants')->insert(array(
            1 => array(
                'id' => 1,
                'stage' => 1,
                'team' => 1,
                'progress' => 'P'
            ),
            2 => array(
                'id' => 2,
                'stage' => 1,
                'team' => 2,
                'progress' => 'P'
            ),
            3 => array(
                'id' => 3,
                'stage' => 1,
                'team' => 3,
                'progress' => 'R',
            ),
            4 => array(
                'id' => 4,
                'stage' => 1,
                'team' => 4,
                'progress' => 'P'
            ),
            5 => array(
                'id' => 5,
                'stage' => 1,
                'team' => 5,
                'progress' => 'R'
            ),
            6 => array(
                'id' => 6,
                'stage' => 1,
                'team' => 6,
                'progress' => 'R'
            ),
        ));
	}

}