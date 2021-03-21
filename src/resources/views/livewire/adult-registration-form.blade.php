<div class="relative bg-white">
    <div class="absolute inset-0">
        <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
    </div>
    <div class="relative mx-auto max-w-7xl lg:grid lg:grid-cols-5">
        <div class="px-4 py-16 bg-gray-50 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
            <div class="max-w-lg mx-auto">
                <x-papiforms::assets.two-thirds-header>
                        Adult Card Application
                </x-papiforms::assets.two-thirds-header>
                <p class="mt-3 leading-6 text-gray-500">
                    To apply online, you must be a Daviess County resident aged 18 years or older,
                    and your address must match the address on your driver's license or photo ID. </p>
                <p class="mt-3 leading-6 text-gray-500">
                    Adult non-residents must apply for a card at the library.<br/>
                    <a href="https://www.dcplibrary.org/get-a-library-card">
                        To see what types of cards are available,
                        visit https://www.dcplibrary.org/get-a-library-card</a>
                </p>

                <x-papiforms::assets.two-thirds-contact />
            </div>
        </div>
        <div class="px-4 py-16 bg-white sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
            <div class="max-w-lg mx-auto lg:max-w-none">
                <div>
                @if ($successMessage)
                        <x-papiforms::modals.success title="{{ $modalTitle }}" barcode="{{ $modalBarcode }}" pin="{{ $modalPIN }}">
                            {{ $modalMessage }}
                        </x-papiforms::modals.success>
                @endif
                @if ($errorMessage)
                        <x-papiforms::modals.error title="{{ $modalTitle }}" ok="{{ $modalOK }}">
                            {{ $modalMessage }}
                        </x-papiforms::modals.error>
                @endif
                </div>
                <form  wire:submit.prevent="submitForm" class="grid grid-cols-1 row-gap-6">
                    @csrf

                    <div>
                        <x-papiforms::input.section section="Full name">
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                                <x-papiforms::input.group label="First name" for="NameFirst">
                                    <x-papiforms::input.text wire:model.defer="NameFirst" id="NameFirst" name="NameFirst" type="text" placeholder="First name" value="{{ old('NameFirst') }}"/>
                                </x-papiforms::input.group>
                            </div>
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                                <x-papiforms::input.group label="Middle name" for="NameMiddle">
                                    <x-papiforms::input.text wire:model.defer="NameMiddle" id="NameMiddle" name="NameMiddle" type="text" placeholder="Middle name" value="{{ old('NameMiddle') }}"/>
                                </x-papiforms::input.group>
                            </div>
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                        <x-papiforms::input.group label="Last name" for="NameLast">
                            <x-papiforms::input.text wire:model.defer="NameLast" id="NameLast" name="NameLast" type="text" placeholder="Last name" value="{{ old('NameLast') }}"/>
                            </x-papiforms::input.group>
                        </x-papiforms::input.section>
                            </div>
                        </div>
                    <x-papiforms::input.section section="Address">
                        <div class="flex flex-wrap -mx-3 mb-2">
                         <div class="w-full md:w-2/3 px-3 md:mb-0">
                    <x-papiforms::input.group label="Street address" for="StreetOne">
                        <x-papiforms::input.text wire:model.defer="StreetOne" id="StreetOne" name="text" type="StreetOne" placeholder="Street address" value="{{ old('StreetOne') }}"/>
                    </x-papiforms::input.group>
                            </div>
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                    <x-papiforms::input.group label="Apartment #" for="StreetTwo">
                        <x-papiforms::input.text wire:model.defer="StreetTwo" id="StreetTwo" name="text" type="StreetTwo" placeholder="Apt #" value="{{ old('StreetTwo') }}"/>
                    </x-papiforms::input.group>
                            </div>
                        </div>
                        <x-papiforms::input.group label="City, State, Postal Code" for="selectedPostalCodeID">
                            <x-papiforms::input.select-postal-code wire:model.defer="selectedPostalCodeID" id="selectedPostalCodeID" name="selectedPostalCodeID" value="{{ old('selectedPostalCodeID') }}"/>
                        </x-papiforms::input.group>
            </x-papiforms::input.section>
                        <input wire:model="PostalCode" id="PostalCode" name="PostalCode" type="hidden" value="{{ old('PostalCode') }}" />
                        <input wire:model="City" id="City" name="City" type="hidden" value="{{ old('City') }}" />
                        <input wire:model="State" id="State" name="State" type="hidden" value="{{ old('State') }}" />
                        <input wire:model="County" id="County" name="County" type="hidden" value="{{ old('County') }}" />
                        <input wire:model="CountryID" id="CountryID" name="CountryID" type="hidden" value="{{ old('CountryID') }}" />
            <x-papiforms::input.section section="Birthdate">

                        <x-papiforms::input.group label="Birthdate" for="Birthdate">
                            <x-papiforms::input.datepicker wire:model.defer="Birthdate" id="Birthdate" name="Birthdate" type="text" placeholder="MM/DD/YYYY" value="{{ old('Birthdate') }}"/>
                        </x-papiforms::input.group>
            </x-papiforms::input.section>

            <x-papiforms::input.section section="Contact information">

                        <x-papiforms::input.group label="Email" for="EmailAddress">
                            <x-papiforms::input.text wire:model.defer="EmailAddress" id="EmailAddress" name="EmailAddress" type="text" placeholder="Email address" value="{{ old('EmailAddress') }}"/>
                        </x-papiforms::input.group>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 md:mb-0">
                        <x-papiforms::input.group label="Phone" for="PhoneVoice1">
                            <x-papiforms::input.text wire:model.defer="PhoneVoice1" id="PhoneVoice1" name="PhoneVoice1" type="text" placeholder="Phone number" value="{{ old('PhoneVoice1') }}"/>
                        </x-papiforms::input.group>
                    </div>
                        <div class="w-full md:w-1/2 px-3 md:mb-0">
                        {{-- Phone Carrier Selection --}}
                        <x-papiforms::input.group label="Mobile carrier" for="Phone1CarrierID">
                            <x-papiforms::input.select-mobile-phone-carrier wire:model.defer="Phone1CarrierID" id="Phone1CarrierID" name="Phone1CarrierID"  value="{{ old('Phone1CarrierID') }}" />
                        </x-papiforms::input.group>
                        </div>
                </div>
                        <input wire:model="TxtPhoneNumber" name="TxtPhoneNumber" type="hidden" />

                        {{-- Delivery option --}}
                        <x-papiforms::input.group label="Notification preference" for="DeliveryOptionID">
                            <x-papiforms::input.select-delivery-option wire:model.defer="DeliveryOptionID" id="DeliveryOptionID" name="DeliveryOptionID"  value="{{ old('DeliveryOptionID') }}" />
                        </x-papiforms::input.group>
            </x-papiforms::input.section>
            <x-papiforms::input.section section="Password">

            <x-papiforms::input.group label="Password" for="Password">
                            <x-papiforms::input.text wire:model.defer="Password" id="Password" name="Password" type="password" placeholder="Password" value="{{ old('Password') }}"/>
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="Confirm password" for="Password_confirmation">
                            <x-papiforms::input.text wire:model.defer="Password_confirmation" id="Password_confirmation" name="Password_confirmation" type="password" placeholder="Confirm password" value="{{ old('Password_confirmation') }}"/>
                        </x-papiforms::input.group>
            </x-papiforms::input.section>
                        <input wire:model="PatronCode" type="hidden" name="PatronCode" />
            <x-papiforms::input.section section="Identification">
                <x-papiforms::input.group label="Indentification" for="User2">
                    <x-papiforms::input.text wire:model="User2" id="User2" name="User2" placeholder="License or ID #" value="{{ old('User2') }}"/>
                </x-papiforms::input.group>

                 <x-papiforms::input.group label="Upload an image of your Driver's License or other government issued ID." for="newUpload">

                <x-papiforms::input.filepond wire:model="newUpload" name="newUpload" />

                </x-papiforms::input.group>

            </x-papiforms::input.section>

            <div class="mt-10">
                        <span class="inline-flex rounded-md shadow-sm">
                            <button type="submit"
                                    class="inline-flex items-center justify-center px-6 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 disabled:opacity-50">
                                <svg wire:loading wire:target="submitForm" class="w-5 h-5 mr-3 -ml-1 text-white animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                          d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                                <span>Submit</span>
                            </button>
                        </span>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
