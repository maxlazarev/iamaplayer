<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('TeamsTableSeeder');
		$this->call('MatchesTableSeeder');
		$this->call('PlayersTableSeeder');
        $this->call('NewsPostsTableSeeder');
        $this->call('CompetitionsTableSeeder');
        $this->call('StagesTableSeeder');
	}

}
