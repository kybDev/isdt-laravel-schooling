<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StatisticsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("statistics")->insert([
            ["personnel_id" => 1, "height" => 164 ,"weight" => 50, "bmi" => 1],
            ["personnel_id" => 2, "height" => 165 ,"weight" => 51, "bmi" => 1],
            ["personnel_id" => 3, "height" => 166 ,"weight" => 52, "bmi" => 1],
            ["personnel_id" => 4, "height" => 167 ,"weight" => 53, "bmi" => 1],
            ["personnel_id" => 5, "height" => 168 ,"weight" => 54, "bmi" => 1],
            ["personnel_id" => 6, "height" => 169 ,"weight" => 55, "bmi" => 1],
            ["personnel_id" => 7, "height" => 170 ,"weight" => 56, "bmi" => 1],
            ["personnel_id" => 8, "height" => 171 ,"weight" => 57, "bmi" => 1],
            ["personnel_id" => 9, "height" => 172 ,"weight" => 58, "bmi" => 1],
            ["personnel_id" => 10, "height" => 173 ,"weight" => 59, "bmi" => 1],
        ]);
    }
}
