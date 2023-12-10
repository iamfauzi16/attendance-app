<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StatusAttendanceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_attendances')->insert([
            'name' => 'Masuk',
            'detail_status' => 'Masuk'
        ]);
    }
}
