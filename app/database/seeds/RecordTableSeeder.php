<?php
class RecordTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('records')->delete();

        Record::create(array(
            'artist' => 'Taylor Swift',
            'title' => '1989',
            'year' => '2014',
            'user_id' => 1,
        ));

        Record::create(array(
            'artist' => 'Taylor Swift',
            'title' => 'Red',
            'year' => '2012',
            'user_id' => 1,
        ));

        Record::create(array(
            'artist' => 'Taylor Swift',
            'title' => 'Speak Now',
            'year' => '2010',
            'user_id' => 1,
        ));

        Record::create(array(
            'artist' => 'Taylor Swift',
            'title' => 'Fearless - Platinum Edition',
            'year' => '2009',
            'user_id' => 1,
        ));
    }
}
