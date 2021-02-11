<?php

namespace Database\Factories;

use App\Models\Personnel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
class PersonnelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Personnel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $bday = $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null);

        return [
            'first_name' =>  $this->faker->name,
            'last_name' =>  $this->faker->lastName,
            'middle_name' => $this->faker->lastName,
            'age' => Carbon::parse($bday)->age,
            'birthdate' => $bday,
            'rating' => rand(1, 5),
        ];
    }
}
