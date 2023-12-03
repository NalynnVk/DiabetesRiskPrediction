<?php

namespace Database\Factories;

use App\Models\Gender;
use App\Models\Result;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diabetes>
 */
class DiabetesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'age' => $this->faker->randomDigit(2),
            'gender_id' => Gender::inRandomOrder()->pluck('id')->first(),
            'polyuria' => $this->faker->boolean(),
            'polydipsia' => $this->faker->boolean(),
            'sudden_weight_loss' => $this->faker->boolean(),
            'weakness' => $this->faker->boolean(),
            'polyphagia' => $this->faker->boolean(),
            'genital_thrush' => $this->faker->boolean(),
            'visual_blurring' => $this->faker->boolean(),
            'itching' => $this->faker->boolean(),
            'irritability' => $this->faker->boolean(),
            'delayed_healing' => $this->faker->boolean(),
            'partial_paresis' => $this->faker->boolean(),
            'muscle_stiffness' => $this->faker->boolean(),
            'alopecia' => $this->faker->boolean(),
            'obesity' => $this->faker->boolean(),
            'result_id' => Result::inRandomOrder()->pluck('id')->first(),
        ];
    }
}
