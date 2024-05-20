<?php

namespace Blashbrook\PAPIForms\Database\Factories;

use Blashbrook\PAPIForms\App\Models\UdfOptionDef;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class UdfOptionDefFactory extends Factory
{
    protected $model = UdfOptionDef::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
            'OrgID' => $this->faker->randomNumber(),
            'UDFOptionID' => $this->faker->randomNumber(),
            'AttrID' => $this->faker->randomNumber(),
            'DisplayOrder' => $this->faker->randomNumber(),
        ];
    }
}
