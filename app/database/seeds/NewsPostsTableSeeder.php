<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class NewsPostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			NewsPost::create([
                'title' => $faker->text(),
                'preview' => $faker->paragraph(),
                'body' => $faker->paragraph(),
			]);
		}
	}

}