<?php

namespace Database\Factories;

use App\Models\Analytic;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
class AnalyticFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Analytic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $bday = $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null);
        $ran = array('M', "F");
        return [
            'gender' => $ran[array_rand($ran, 1)],
            'age' => Carbon::parse($bday)->age,
            'city' => $this->faker->city(),
        ];
    }
}
