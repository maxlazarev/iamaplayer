<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CompetitionsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Competition::create([
                'name' => 'Iamaplayer Cup ' . $index,
                'owner' => 1
			]);
		}
	}

}