<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class RoundsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 15) as $index)
		{
			Round::create([
                'stage' => 1,
                'name' => 'Round ' . $index
			]);
		}
	}

}