<?php

namespace Blashbrook\PAPIForms\Database\Factories;

use Blashbrook\PAPIForms\App\Models\PatronUdf;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PatronUdfFactory extends Factory
{
    protected $model = PatronUdf::class;

    public function definition(): array
    {
        return [
            'PatronUdfID' => $this->faker->randomNumber(),
            'Label' => $this->faker->word(),
            'Display' => $this->faker->boolean(),
            'Values' => $this->faker->word(),
            'Required' => $this->faker->boolean(),
            'DefaultValue' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
