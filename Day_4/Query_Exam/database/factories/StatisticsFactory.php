<?php

namespace Database\Factories;

use App\Models\Statistics;
use App\Models\Personnel;
use Illuminate\Database\Eloquent\Factories\Factory;

class StatisticsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Statistics::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    
    public function definition()
    {   
        $height = rand(160, 170);
        $weight = rand(45, 90);
      
        return [
            'personnel_id' => $this->faker->unique()->numberBetween(1, Personnel::count()),
            'height' => $height,
            'weight' => $weight,
            'bmi'  => $this->bmi($weight, ($height/100))
        ];
  
    }

    private function bmi($mass, $height) {
        $bmi = $mass/($height*$height);
        return $bmi;
    }   
}
