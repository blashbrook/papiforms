<?php

namespace Blashbrook\PAPIForms\Database\Factories;

use Blashbrook\PAPIForms\Models\PatronRegistration;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatronRegistrationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatronRegistration::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'State' => 'KY',
            'County' => 'Daviess',
            'PhoneVoice1' => $this->faker->numerify('##########'),
            'PostalCode' => $this->faker->postcode,
            'City' => $this->faker->city,
            'StreetOne' => $this->faker->streetAddress,
            'NameFirst' => $this->faker->firstName,
            'NameLast' => $this->faker->lastName,
            'NameMiddle' => $this->faker->name,
            'Birthdate' => $this->faker->datetime,
            'EmailAddress' => $this->faker->unique()->safeEmail,
            'Barcode' => $this->faker->numerify('2330709999####'),
        ];
    }
}
