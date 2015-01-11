<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class StagesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

        DB::table('stages')->insert(array(
        0 =>
            array (
                'id' => 1,
                'competition' => 4,
                'name' => 'Group stage',
                'type' => 'G',
                'prevStage' => 0,
                'nextStage' => 2,
                'status' => 'O',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00'
            ),
        1 =>
            array (
                'id' => 2,
                'competition' => 4,
                'name' => '1/4',
                'type' => 'PO',
                'prevStage' => 1,
                'nextStage' => 3,
                'status' => 'O',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00'
            ),
        3 =>
            array (
                'id' => 3,
                'competition' => 4,
                'name' => '1/2',
                'type' => 'PO',
                'prevStage' => 2,
                'nextStage' => 4,
                'status' => 'O',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00'
            ),
        4 =>
            array (
                'id' => 4,
                'competition' => 4,
                'name' => 'Final',
                'type' => 'PO',
                'prevStage' => 3,
                'nextStage' => 0,
                'status' => 'O',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '0000-00-00 00:00:00'
            )
        ));
	}

}