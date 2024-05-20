<?php

namespace Blashbrook\PAPIForms\Database\Factories;

use Blashbrook\PAPIForms\App\Models\PatronCode;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PatronCodeFactory extends Factory
{
    protected $model = PatronCode::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
            'PatronCodeID' => $this->faker->randomNumber(),
            'Description' => $this->faker->text(),
        ];
    }
}
