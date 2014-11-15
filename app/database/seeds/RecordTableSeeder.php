<?php
class RecordTableSeeder extends Seeder {
	public function run() {
		DB::table('records')->delete();

		Record::create(array(
			'artist' => 'Taylor Swift',
			'title' => '1989',
			'year' => '2014',
			'user_id' => 1,
		));
	}
}