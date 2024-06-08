<?php

namespace Blashbrook\PAPIForms\Database\Factories;

use Blashbrook\PAPIForms\App\Models\DeliveryOption;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DeliveryOptionFactory extends Factory
{
    protected $model = DeliveryOption::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
            'DeliveryOptionID' => $this->faker->randomNumber(),
            'DeliveryOption' => $this->faker->word(),
        ];
    }
}
