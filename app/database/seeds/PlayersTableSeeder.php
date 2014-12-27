<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PlayersTableSeeder extends Seeder {

	public function run()
	{
        DB::table('players')->truncate();
		$faker = Faker::create();
        DB::table('players')->insert(array (
            1 =>
                array (
                    'id' => 1,
                    'email' => 'maxlazarev@gmail.com',
                    'password' => Hash::make(Hash::make('1234')),
                    'firstName' => 'Maxim',
                    'lastName' => 'Lazarev',
                    'admin' => true,
                    'remember_token' => '',
                    'created_at' => '2014-12-12 18:33:47',
                    'updated_at' => '2014-12-12 18:33:47',
                )));
        /*Eloquent::unguard();
		foreach(range(2, 10) as $index)
		{
			Player::create([
                'id' => $index,
                'email' => $faker->email,
                'password' => Hash::make($faker->word),
                'firstName' => $faker->firstName,
                'lastName' => $faker->lastName,
                'admin' => false,
                'remember_token' => '',
                'created_at' => '2014-12-12 18:33:47',
                'updated_at' => '2014-12-12 18:33:47',
			]);
		}*/
	}

}