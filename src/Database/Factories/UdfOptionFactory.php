<?php

namespace Blashbrook\PAPIForms\Database\Factories;

use Blashbrook\PAPIForms\App\Models\UdfOption;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class UdfOptionFactory extends Factory
{
    protected $model = UdfOption::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
            'UDFOptionID' => $this->faker->randomNumber(),
            'AttrID' => $this->faker->randomNumber(),
            'OptionDesc' => $this->faker->word(),
        ];
    }
}
