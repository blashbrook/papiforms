<?php

namespace Blashbrook\PapiformsReact\Blashbrook\PAPIForms\Database\Factories;

use Blashbrook\PAPIForms\App\Models\MobilePhoneCarrier;
use Blashbrook\PAPIForms\App\Models\PatronCode;
use Blashbrook\PAPIForms\App\Models\PatronRegistration;
use Blashbrook\PapiformsReact\Facades\DeliveryOption;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PatronRegistrationFactory extends Factory
{
    protected $model = PatronRegistration::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'created_at' => Carbon::now(), //
            'updated_at' => Carbon::now(),
            'LogonBranchID' => $this->faker->randomNumber(),
            'LogonUserID' => $this->faker->randomNumber(),
            'LogonWorkstationID' => $this->faker->randomNumber(),
            'PatronBranchID' => $this->faker->randomNumber(),
            'PostalCode' => $this->faker->postcode(),
            'ZipPlusFour' => $this->faker->postcode(),
            'City' => $this->faker->city(),
            'State' => $this->faker->word(),
            'County' => $this->faker->word(),
            'CountryID' => $this->faker->randomNumber(),
            'StreetOne' => $this->faker->streetName(),
            'StreetTwo' => $this->faker->streetName(),
            'StreetThree' => $this->faker->streetName(),
            'NameFirst' => $this->faker->firstName(),
            'NameLast' => $this->faker->lastName(),
            'NameMiddle' => $this->faker->name(),
            'User1' => $this->faker->word(),
            'User2' => $this->faker->word(),
            'User3' => $this->faker->word(),
            'User4' => $this->faker->word(),
            'User5' => $this->faker->word(),
            'Gender' => $this->faker->word(),
            'Birthdate' => $this->faker->word(),
            'PhoneVoice1' => $this->faker->phoneNumber(),
            'PhoneVoice2' => $this->faker->phoneNumber(),
            'PhoneVoice3' => $this->faker->phoneNumber(),
            'EmailAddress' => $this->faker->unique()->safeEmail(),
            'AltEmailAddress' => $this->faker->unique()->safeEmail(),
            'LanguageID' => $this->faker->randomNumber(),
            'UserName' => $this->faker->userName(),
            'Password' => bcrypt($this->faker->password()),
            'Password2' => bcrypt($this->faker->password()),
            'EnableSMS' => $this->faker->word(),
            'TxtPhoneNumber' => $this->faker->phoneNumber(),
            'Barcode' => $this->faker->word(),
            'EReceiptOptionID' => $this->faker->randomNumber(),
            'ExpirationDate' => $this->faker->word(),
            'AddrCheckDate' => $this->faker->word(),
            'GenderID' => $this->faker->randomNumber(),
            'LegalNameFirst' => $this->faker->firstName(),
            'LegalNameLast' => $this->faker->lastName(),
            'LegalNameMiddle' => $this->faker->name(),
            'UseLegalNameOnNotices' => $this->faker->name(),

            'Phone1CarrierID' => MobilePhoneCarrier::factory(),
            'Phone2CarrierID' => MobilePhoneCarrier::factory(),
            'Phone3CarrierID' => MobilePhoneCarrier::factory(),
            'DeliveryOptionID' => DeliveryOption::factory(),
            'PatronCodeID' => PatronCode::factory(),
        ];
    }
}
