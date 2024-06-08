<?php

namespace Blashbrook\PAPIForms\Database\Factories;

use Blashbrook\PAPIForms\App\Models\MobilePhoneCarrier;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class MobilePhoneCarrierFactory extends Factory
{
    protected $model = MobilePhoneCarrier::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
            'CarrierID' => $this->faker->randomNumber(),
            'CarrierName' => $this->faker->name(),
            'Email2SMSEmailAddress' => $this->faker->unique()->safeEmail(),
            'NumberOfDigits' => $this->faker->randomNumber(),
            'Display' => $this->faker->randomNumber(),
        ];
    }
}
