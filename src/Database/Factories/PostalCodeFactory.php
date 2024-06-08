<?php

namespace Blashbrook\PAPIForms\Database\Factories;

use Blashbrook\PAPIForms\App\Models\PostalCode;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PostalCodeFactory extends Factory
{
    protected $model = PostalCode::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
            'PostalCodeID' => $this->faker->postcode(),
            'PostalCode' => $this->faker->postcode(),
            'City' => $this->faker->city(),
            'State' => $this->faker->word(),
            'CountryID' => $this->faker->randomNumber(),
            'County' => $this->faker->word(),
        ];
    }
}
