<?php

class MatchesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('matches')->truncate();
        
		\DB::table('matches')->insert(array (
			0 => 
			array (
				'id' => 1,
				'homeTeam' => 6,
				'awayTeam' => 4,
				'homeScored' => 2,
				'awayScored' => 8,
				'created_at' => '2014-12-12 18:33:47',
				'updated_at' => '2014-12-12 18:33:47',
                'round' => 1,
			),
			1 => 
			array (
				'id' => 2,
				'homeTeam' => 7,
				'awayTeam' => 1,
				'homeScored' => 1,
				'awayScored' => 9,
				'created_at' => '2014-12-12 19:50:20',
				'updated_at' => '2014-12-12 19:50:20',
                'round' => 1,
			),
			2 => 
			array (
				'id' => 3,
				'homeTeam' => 5,
				'awayTeam' => 3,
				'homeScored' => 17,
				'awayScored' => 1,
				'created_at' => '2014-12-12 19:51:22',
				'updated_at' => '2014-12-12 19:51:22',
                'round' => 1,
			),
			3 => 
			array (
				'id' => 4,
				'homeTeam' => 6,
				'awayTeam' => 1,
				'homeScored' => 6,
				'awayScored' => 7,
				'created_at' => '2014-12-12 19:55:47',
				'updated_at' => '2014-12-12 19:55:47',
                'round' => 2,
			),
			4 => 
			array (
				'id' => 5,
				'homeTeam' => 3,
				'awayTeam' => 2,
				'homeScored' => 2,
				'awayScored' => 14,
				'created_at' => '2014-12-12 19:58:58',
				'updated_at' => '2014-12-12 19:58:58',
                'round' => 2,
			),
			5 => 
			array (
				'id' => 6,
				'homeTeam' => 4,
				'awayTeam' => 8,
				'homeScored' => 6,
				'awayScored' => 1,
				'created_at' => '2014-12-12 20:08:26',
				'updated_at' => '2014-12-12 20:08:26',
                'round' => 2,
			),
			6 => 
			array (
				'id' => 7,
				'homeTeam' => 2,
				'awayTeam' => 1,
				'homeScored' => 12,
				'awayScored' => 3,
				'created_at' => '2014-12-12 20:15:05',
				'updated_at' => '2014-12-12 20:15:05',
                'round' => 3,
			),
			7 => 
			array (
				'id' => 8,
				'homeTeam' => 6,
				'awayTeam' => 8,
				'homeScored' => 9,
				'awayScored' => 4,
				'created_at' => '2014-12-12 20:15:32',
				'updated_at' => '2014-12-12 20:15:32',
                'round' => 3,
			),
			8 => 
			array (
				'id' => 9,
				'homeTeam' => 9,
				'awayTeam' => 3,
				'homeScored' => 9,
				'awayScored' => 10,
				'created_at' => '2014-12-12 20:15:56',
				'updated_at' => '2014-12-12 20:15:56',
                'round' => 3,
			),
			9 => 
			array (
				'id' => 10,
				'homeTeam' => 5,
				'awayTeam' => 7,
				'homeScored' => 11,
				'awayScored' => 6,
				'created_at' => '2014-12-12 20:16:26',
				'updated_at' => '2014-12-12 20:16:26',
                'round' => 3,
			),
			10 => 
			array (
				'id' => 11,
				'homeTeam' => 8,
				'awayTeam' => 9,
				'homeScored' => 5,
				'awayScored' => 11,
				'created_at' => '2014-12-12 20:16:52',
				'updated_at' => '2014-12-12 20:16:52',
                'round' => 3,
			),
			11 => 
			array (
				'id' => 12,
				'homeTeam' => 4,
				'awayTeam' => 1,
				'homeScored' => 2,
				'awayScored' => 6,
				'created_at' => '2014-12-12 20:17:51',
				'updated_at' => '2014-12-12 20:17:51',
                'round' => 3,
			),
			12 => 
			array (
				'id' => 13,
				'homeTeam' => 2,
				'awayTeam' => 6,
				'homeScored' => 11,
				'awayScored' => 3,
				'created_at' => '2014-12-12 20:18:23',
				'updated_at' => '2014-12-12 20:18:23',
                'round' => 3,
			),
			13 => 
			array (
				'id' => 14,
				'homeTeam' => 7,
				'awayTeam' => 9,
				'homeScored' => 13,
				'awayScored' => 6,
				'created_at' => '2014-12-12 20:19:34',
				'updated_at' => '2014-12-12 20:19:34',
                'round' => 3,
			),
			14 => 
			array (
				'id' => 15,
				'homeTeam' => 8,
				'awayTeam' => 3,
				'homeScored' => 7,
				'awayScored' => 5,
				'created_at' => '2014-12-12 20:19:54',
				'updated_at' => '2014-12-12 20:19:54',
                'round' => 3,
			),
			15 => 
			array (
				'id' => 16,
				'homeTeam' => 5,
				'awayTeam' => 9,
				'homeScored' => 13,
				'awayScored' => 3,
				'created_at' => '2014-12-12 20:20:13',
				'updated_at' => '2014-12-12 20:20:13',
                'round' => 3,
			),
			16 => 
			array (
				'id' => 17,
				'homeTeam' => 4,
				'awayTeam' => 7,
				'homeScored' => 2,
				'awayScored' => 2,
				'created_at' => '2014-12-12 21:24:38',
				'updated_at' => '2014-12-12 21:24:38',
                'round' => 3,
			),
			17 => 
			array (
				'id' => 18,
				'homeTeam' => 5,
				'awayTeam' => 6,
				'homeScored' => 7,
				'awayScored' => 9,
				'created_at' => '2014-12-12 21:24:56',
				'updated_at' => '2014-12-12 21:24:56',
                'round' => 3,
			),
			18 => 
			array (
				'id' => 19,
				'homeTeam' => 3,
				'awayTeam' => 4,
				'homeScored' => 0,
				'awayScored' => 5,
				'created_at' => '2014-12-12 21:25:36',
				'updated_at' => '2014-12-12 21:25:36',
                'round' => 3,
			),
			19 => 
			array (
				'id' => 20,
				'homeTeam' => 9,
				'awayTeam' => 2,
				'homeScored' => 2,
				'awayScored' => 8,
				'created_at' => '2014-12-12 21:25:55',
				'updated_at' => '2014-12-12 21:25:55',
                'round' => 3,
			),
			20 => 
			array (
				'id' => 21,
				'homeTeam' => 1,
				'awayTeam' => 8,
				'homeScored' => 8,
				'awayScored' => 8,
				'created_at' => '2014-12-12 21:29:36',
				'updated_at' => '2014-12-12 21:29:36',
                'round' => 3,
			),
			21 => 
			array (
				'id' => 22,
				'homeTeam' => 8,
				'awayTeam' => 7,
				'homeScored' => 6,
				'awayScored' => 2,
				'created_at' => '2014-12-12 21:30:42',
				'updated_at' => '2014-12-12 21:30:42',
                'round' => 3,
			),
			22 => 
			array (
				'id' => 23,
				'homeTeam' => 4,
				'awayTeam' => 9,
				'homeScored' => 9,
				'awayScored' => 8,
				'created_at' => '2014-12-12 21:30:58',
				'updated_at' => '2014-12-12 21:30:58',
                'round' => 3,
			),
			23 => 
			array (
				'id' => 24,
				'homeTeam' => 6,
				'awayTeam' => 3,
				'homeScored' => 2,
				'awayScored' => 3,
				'created_at' => '2014-12-12 21:31:23',
				'updated_at' => '2014-12-12 21:31:23',
                'round' => 3,
			),
			24 => 
			array (
				'id' => 25,
				'homeTeam' => 5,
				'awayTeam' => 2,
				'homeScored' => 5,
				'awayScored' => 6,
				'created_at' => '2014-12-12 21:31:40',
				'updated_at' => '2014-12-12 21:31:40',
                'round' => 3,
			),
			25 => 
			array (
				'id' => 26,
				'homeTeam' => 2,
				'awayTeam' => 4,
				'homeScored' => 13,
				'awayScored' => 3,
				'created_at' => '2014-12-12 21:32:07',
				'updated_at' => '2014-12-12 21:32:07',
                'round' => 3,
			),
			26 => 
			array (
				'id' => 27,
				'homeTeam' => 1,
				'awayTeam' => 9,
				'homeScored' => 7,
				'awayScored' => 1,
				'created_at' => '2014-12-12 21:32:35',
				'updated_at' => '2014-12-12 21:32:35',
                'round' => 3,
			),
			27 => 
			array (
				'id' => 28,
				'homeTeam' => 6,
				'awayTeam' => 7,
				'homeScored' => 6,
				'awayScored' => 5,
				'created_at' => '2014-12-12 21:32:51',
				'updated_at' => '2014-12-12 21:32:51',
                'round' => 3,
			),
			28 => 
			array (
				'id' => 29,
				'homeTeam' => 1,
				'awayTeam' => 3,
				'homeScored' => 3,
				'awayScored' => 6,
				'created_at' => '2014-12-12 21:33:11',
				'updated_at' => '2014-12-12 21:33:11',
                'round' => 3,
			),
			29 => 
			array (
				'id' => 30,
				'homeTeam' => 5,
				'awayTeam' => 8,
				'homeScored' => 8,
				'awayScored' => 2,
				'created_at' => '2014-12-12 21:33:25',
				'updated_at' => '2014-12-12 21:33:25',
                'round' => 3,
			),
			30 => 
			array (
				'id' => 31,
				'homeTeam' => 2,
				'awayTeam' => 8,
				'homeScored' => 6,
				'awayScored' => 5,
				'created_at' => '2014-12-12 21:33:45',
				'updated_at' => '2014-12-12 21:33:45',
                'round' => 3,
			),
			31 => 
			array (
				'id' => 32,
				'homeTeam' => 6,
				'awayTeam' => 4,
				'homeScored' => 1,
				'awayScored' => 7,
				'created_at' => '2014-12-12 21:33:58',
				'updated_at' => '2014-12-12 21:33:58',
                'round' => 3,
			),
			32 => 
			array (
				'id' => 33,
				'homeTeam' => 1,
				'awayTeam' => 5,
				'homeScored' => 2,
				'awayScored' => 4,
				'created_at' => '2014-12-12 21:34:11',
				'updated_at' => '2014-12-12 21:34:11',
                'round' => 3,
			),
			33 => 
			array (
				'id' => 34,
				'homeTeam' => 7,
				'awayTeam' => 3,
				'homeScored' => 0,
				'awayScored' => 2,
				'created_at' => '2014-12-12 21:34:33',
				'updated_at' => '2014-12-12 21:34:33',
                'round' => 3,
			),
			34 => 
			array (
				'id' => 35,
				'homeTeam' => 2,
				'awayTeam' => 7,
				'homeScored' => 10,
				'awayScored' => 2,
				'created_at' => '2014-12-12 21:35:38',
				'updated_at' => '2014-12-12 21:35:38',
                'round' => 3,
			),
			35 => 
			array (
				'id' => 36,
				'homeTeam' => 5,
				'awayTeam' => 4,
				'homeScored' => 1,
				'awayScored' => 6,
				'created_at' => '2014-12-12 21:36:11',
				'updated_at' => '2014-12-12 21:36:11',
                'round' => 3,
			),
			36 => 
			array (
				'id' => 37,
				'homeTeam' => 1,
				'awayTeam' => 6,
				'homeScored' => 6,
				'awayScored' => 3,
				'created_at' => '2014-12-12 21:36:29',
				'updated_at' => '2014-12-12 21:36:29',
                'round' => 3,
			),
			37 => 
			array (
				'id' => 38,
				'homeTeam' => 3,
				'awayTeam' => 8,
				'homeScored' => 4,
				'awayScored' => 4,
				'created_at' => '2014-12-12 21:37:03',
				'updated_at' => '2014-12-12 21:37:03',
                'round' => 3,
			),
			38 => 
			array (
				'id' => 39,
				'homeTeam' => 8,
				'awayTeam' => 7,
				'homeScored' => 3,
				'awayScored' => 6,
				'created_at' => '2014-12-12 21:37:54',
				'updated_at' => '2014-12-12 21:37:54',
                'round' => 3,
			),
			39 => 
			array (
				'id' => 40,
				'homeTeam' => 1,
				'awayTeam' => 4,
				'homeScored' => 4,
				'awayScored' => 1,
				'created_at' => '2014-12-12 21:38:12',
				'updated_at' => '2014-12-12 21:38:12',
                'round' => 3,
			),
			40 => 
			array (
				'id' => 41,
				'homeTeam' => 5,
				'awayTeam' => 3,
				'homeScored' => 3,
				'awayScored' => 10,
				'created_at' => '2014-12-12 21:38:29',
				'updated_at' => '2014-12-12 21:38:29',
                'round' => 3,
			),
			41 => 
			array (
				'id' => 42,
				'homeTeam' => 6,
				'awayTeam' => 2,
				'homeScored' => 2,
				'awayScored' => 3,
				'created_at' => '2014-12-12 21:38:39',
				'updated_at' => '2014-12-12 21:38:39',
                'round' => 3,
			),
			42 => 
			array (
				'id' => 43,
				'homeTeam' => 4,
				'awayTeam' => 3,
				'homeScored' => 4,
				'awayScored' => 10,
				'created_at' => '2014-12-12 21:38:58',
				'updated_at' => '2014-12-12 21:38:58',
                'round' => 3,
			),
			43 => 
			array (
				'id' => 44,
				'homeTeam' => 1,
				'awayTeam' => 2,
				'homeScored' => 3,
				'awayScored' => 3,
				'created_at' => '2014-12-12 21:39:12',
				'updated_at' => '2014-12-12 21:39:12',
                'round' => 3,
			),
			44 => 
			array (
				'id' => 45,
				'homeTeam' => 5,
				'awayTeam' => 8,
				'homeScored' => 4,
				'awayScored' => 1,
				'created_at' => '2014-12-12 21:39:33',
				'updated_at' => '2014-12-12 21:39:33',
                'round' => 3,
			),
			45 => 
			array (
				'id' => 46,
				'homeTeam' => 7,
				'awayTeam' => 6,
				'homeScored' => 5,
				'awayScored' => 3,
				'created_at' => '2014-12-12 21:39:49',
				'updated_at' => '2014-12-12 21:39:49',
                'round' => 3,
			),
			46 => 
			array (
				'id' => 47,
				'homeTeam' => 2,
				'awayTeam' => 4,
				'homeScored' => 6,
				'awayScored' => 4,
				'created_at' => '2014-12-12 21:41:04',
				'updated_at' => '2014-12-12 21:41:04',
                'round' => 3,
			),
			47 => 
			array (
				'id' => 48,
				'homeTeam' => 3,
				'awayTeam' => 7,
				'homeScored' => 6,
				'awayScored' => 2,
				'created_at' => '2014-12-12 21:41:17',
				'updated_at' => '2014-12-12 21:41:17',
                'round' => 3,
			),
			48 => 
			array (
				'id' => 49,
				'homeTeam' => 6,
				'awayTeam' => 8,
				'homeScored' => 3,
				'awayScored' => 4,
				'created_at' => '2014-12-12 21:41:38',
				'updated_at' => '2014-12-12 21:41:38',
                'round' => 3,
			),
			49 => 
			array (
				'id' => 50,
				'homeTeam' => 1,
				'awayTeam' => 5,
				'homeScored' => 7,
				'awayScored' => 4,
				'created_at' => '2014-12-12 21:41:51',
				'updated_at' => '2014-12-12 21:41:51',
                'round' => 3,
			),
			50 => 
			array (
				'id' => 51,
				'homeTeam' => 4,
				'awayTeam' => 7,
				'homeScored' => 1,
				'awayScored' => 2,
				'created_at' => '2014-12-12 21:42:12',
				'updated_at' => '2014-12-12 21:42:12',
                'round' => 3,
			),
			51 => 
			array (
				'id' => 52,
				'homeTeam' => 2,
				'awayTeam' => 3,
				'homeScored' => 4,
				'awayScored' => 4,
				'created_at' => '2014-12-12 21:42:22',
				'updated_at' => '2014-12-12 21:42:22',
                'round' => 3,
			),
			52 => 
			array (
				'id' => 53,
				'homeTeam' => 5,
				'awayTeam' => 6,
				'homeScored' => 5,
				'awayScored' => 7,
				'created_at' => '2014-12-12 21:42:44',
				'updated_at' => '2014-12-12 21:42:44',
                'round' => 3,
			),
			53 => 
			array (
				'id' => 54,
				'homeTeam' => 1,
				'awayTeam' => 8,
				'homeScored' => 5,
				'awayScored' => 2,
				'created_at' => '2014-12-12 21:42:53',
				'updated_at' => '2014-12-12 21:42:53',
                'round' => 3
			)
		));
	}

}
