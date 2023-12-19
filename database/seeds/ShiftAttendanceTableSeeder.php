<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftAttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('shift_attendances')->insert([
            'user_id' => 1,
            'name_shift' => 'Shift Pagi',
            'start_time' => '07:30:00',
            'end_time' => '16:00:00'

        ]);
    }
}
