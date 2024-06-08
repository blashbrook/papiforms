<?php

namespace Blashbrook\PAPIForms\Database\Factories;

use Blashbrook\PAPIForms\App\Models\PatronStatClassCode;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PatronStatClassCodeFactory extends Factory
{
    protected $model = PatronStatClassCode::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
            'StatisticalClassID' => $this->faker->randomNumber(),
            'OrganizationID' => $this->faker->randomNumber(),
            'Description' => $this->faker->text(),
        ];
    }
}
