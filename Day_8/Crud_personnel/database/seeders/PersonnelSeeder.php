<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use DB;
class PersonnelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("personnel")->insert([
            [
                'first_name' => "ASD",
                'last_name' =>"hahahha",
                'middle_name' => "test",
                'age' => 20,
                'birthdate' => "2000-10-01",
                'rating' => 1,
            ],
            [
                'first_name' => "asdfasdf",
                'last_name' => "asdasd",
                'middle_name' => "akkkkk",
                'age' => 21,
                'birthdate' => "1999-10-03",
                'rating' => 2,
            ],
            [
                'first_name' => "test",
                'last_name' => "hahhah",
                'middle_name' => "test",
                'age' => 22,
                'birthdate' => "1998-10-01",
                'rating' => 3,
            ],
            [
                'first_name' => "First Name",
                'last_name' => "last Name",
                'middle_name' => "Nwahahah",
                'age' => 23,
                'birthdate' => "1997-10-01",
                'rating' => 4,
            ],
            [
                'first_name' => "guko",
                'last_name' => "Hohan",
                'middle_name' => "natuto",
                'age' => 24,
                'birthdate' => "1996-10-01",
                'rating' => 5,
            ],
            [
                'first_name' =>"Borkalkotoyt",
                'last_name' => "Mikini",
                'middle_name' => "Mangan Tapok",
                'age' => 25,
                'birthdate' => "1995-10-01",
                'rating' => 6,
            ],
            [
                'first_name' => "nagan",
                'last_name' => "kasla",
                'middle_name' => "wana",
                'age' => 26,
                'birthdate' => "1994-10-01",
                'rating' => 7,
            ],
            [
                'first_name' => "bwahaha",
                'last_name' => "test",
                'middle_name' => "jajaj",
                'age' => 27,
                'birthdate' => "1993-10-01",
                'rating' => 8,
            ],
            [
                'first_name' => "abdul",
                'last_name' => "php",
                'middle_name' => "javasript",
                'age' => 28,
                'birthdate' => "1992-10-01",
                'rating' => 9,
            ],
            [
                'first_name' => "Laravel",
                'last_name' => "Phalcon",
                'middle_name' => "CakePhp",
                'age' => 29,
                'birthdate' => "1991-10-01",
                'rating' => 10,
            ]
        ]);
    }
}
