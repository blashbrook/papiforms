@props([
    'successMessage'=> $this->form->successMessage,
    'errorMessage' => $this->form->errorMessage,
    'modalTitle' => $this->form->modalTitle,
    'modalMessage' => $this->form->modalMessage,
    'modalOK' => $this->form->modalOK,
    'modalBarcode' => $this->form->modalBarcode,
    'modalPIN' => $this->form->modalPIN
])
<div class="relative bg-white">

    <div class="absolute inset-0">
        <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
    </div>

    {{-- Grid Layout --}}
    <div class="relative mx-auto max-w-7xl lg:grid lg:grid-cols-5">

        {{-- Left Panel --}}
        <div class="px-4 py-16 bg-gray-50 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
            <x-papiforms::blocks.description title="Teen Pass Application">
                Teen Pass offers limited library services to Daviess County residents ages 13-17.  Application does not require a parent/guardian signature.
                A Teen Pass cardholder may check out up to three materials, including books, PG-13/PG/G movies, E-rated video games, CDs, and audiobooks.
                Teen Pass members my also use all digital collections such as Hoopla and Overdrive, and online resources such as Newsbank and the Learning Express Library.
            </x-papiforms::blocks.description>
        </div>
        {{-- End of Left Panel Content --}}

        {{-- Right Panel --}}
        <div class="px-4 py-16 bg-white sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">

            {{-- Right Panel Content --}}
            <div class="max-w-lg mx-auto lg:max-w-none">

                {{-- Form Submission Success Message --}}
                @if ($successMessage)
                        <x-papiforms::modals.success title="{{ $modalTitle }}" barcode="{{ $modalBarcode }}" pin="{{ $modalPIN }}">
                            {{ $modalMessage }}
                        </x-papiforms::modals.success>
                @endif

                {{-- Form Submission Error Message--}}
                @if ($errorMessage)
                        <x-papiforms::modals.error title="{{ $modalTitle }}" ok="{{ $modalOK }}">
                            {{ $modalMessage }}
                        </x-papiforms::modals.error>
                @endif

                {{-- Form --}}
                <form  wire:submit.prevent="submitForm" class="grid grid-cols-1 row-gap-6">
                    @csrf

                    {{-- Full Name Section --}}
                    <x-papiforms::input.section section="Full name">
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                                <x-papiforms::input.group label="First name" for="NameFirst">
                                    <x-papiforms::input.text wire:model="form.NameFirst" id="NameFirst" name="NameFirst" type="text" placeholder="First name" value="{{ old('NameFirst') }}"/>
                                </x-papiforms::input.group>
                            </div>
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                                <x-papiforms::input.group label="Middle name" for="NameMiddle">
                                    <x-papiforms::input.text wire:model="form.NameMiddle" id="NameMiddle" name="NameMiddle" type="text" placeholder="Middle name" value="{{ old('NameMiddle') }}"/>
                                </x-papiforms::input.group>
                            </div>
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                                <x-papiforms::input.group label="Last name" for="NameLast">
                                    <x-papiforms::input.text wire:model="form.NameLast" id="NameLast" name="NameLast" type="text" placeholder="Last name" value="{{ old('NameLast') }}"/>
                                </x-papiforms::input.group>
                            </div>
                        </div>
                    </x-papiforms::input.section>

                    {{-- Parent or Guardian Section --}}
                    <x-papiforms::input.section section="Parent or Guardian">
                        <x-papiforms::input.group label="First name and Last Name" for="User1">
                            <x-papiforms::input.text wire:model="form.User1" id="User1" name="User1" type="text" placeholder="Full Name" value="{{ old('User1') }}"/>
                        </x-papiforms::input.group>
                    </x-papiforms::input.section>

                    {{-- Address Section --}}
                    <x-papiforms::input.section section="Address">
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full md:w-2/3 px-3 md:mb-0">
                                <x-papiforms::input.group label="Street address" for="StreetOne">
                                    <x-papiforms::input.text wire:model="form.StreetOne" id="StreetOne" name="text" type="StreetOne" placeholder="Street address" value="{{ old('StreetOne') }}"/>
                                </x-papiforms::input.group>
                            </div>
                            <div class="w-full md:w-1/3 px-3 md:mb-0">
                                <x-papiforms::input.group label="Apartment #" for="StreetTwo">
                                    <x-papiforms::input.text wire:model="form.StreetTwo" id="StreetTwo" name="text" type="StreetTwo" placeholder="Apt #" value="{{ old('StreetTwo') }}"/>
                                </x-papiforms::input.group>
                            </div>
                        </div>
                        <x-papiforms::input.group label="City, State, Postal Code" for="selectedPostalCodeID">
                            <x-papiforms::input.select-postal-code wire:model="selectedPostalCodeID" id="selectedPostalCodeID" name="selectedPostalCodeID" value="{{ old('selectedPostalCodeID') }}"/>
                        </x-papiforms::input.group>
                    </x-papiforms::input.section>

                    {{-- Hidden Address Fields --}}
                    <input wire:model="form.PostalCode" id="PostalCode" name="PostalCode" type="hidden" value="{{ old('PostalCode') }}" />
                    <input wire:model="form.City" id="City" name="City" type="hidden" value="{{ old('City') }}" />
                    <input wire:model="form.State" id="State" name="State" type="hidden" value="{{ old('State') }}" />
                    <input wire:model="form.County" id="County" name="County" type="hidden" value="{{ old('County') }}" />
                    <input wire:model="form.CountryID" id="CountryID" name="CountryID" type="hidden" value="{{ old('CountryID') }}" />

                    {{-- Birthdate Picker Section --}}
                    <x-papiforms::input.section section="Birthdate">
                         <x-papiforms::input.group label="Birthdate" for="Birthdate">
                            <x-papiforms::input.datepicker wire:model="form.Birthdate" id="Birthdate" name="Birthdate" type="text" placeholder="MM/DD/YYYY" value="{{ old('Birthdate') }}"/>
                        </x-papiforms::input.group>
                    </x-papiforms::input.section>

                    {{-- School Selection Section (User4) --}}
                    <x-papiforms::input.section section="School">
                    <x-papiforms::input.group>
                        <livewire:patron-udf-select wire:model="form.User4"
                           :attrs="['class' => 'form-input block w-full px-4 py-3 border border-gray-300
                            rounded-md placeholder-gray-500 focus:outline-none focus:shadow-outline-blue
                             focus:border-blue-300 transition duration-150 ease-in-out']"/>
                        @error('form.User4')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </x-papiforms::input.group>
                    </x-papiforms::input.section>

                    {{-- Contact Information Section --}}
                    <x-papiforms::input.section section="Contact information">
                        <x-papiforms::input.group label="Email" for="EmailAddress">
                            <x-papiforms::input.text wire:model="form.EmailAddress" id="EmailAddress" name="EmailAddress" type="text" placeholder="Email address" value="{{ old('EmailAddress') }}"/>
                        </x-papiforms::input.group>
                     <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/2 px-3 md:mb-0">
                        <x-papiforms::input.group label="Phone" for="PhoneVoice1">
                            <x-papiforms::input.text wire:model="form.PhoneVoice1" id="PhoneVoice1" name="PhoneVoice1" type="text" placeholder="Phone number" value="{{ old('PhoneVoice1') }}"/>
                        </x-papiforms::input.group>
                    </div>
                        <div class="w-full md:w-1/2 px-3 md:mb-0">
                        </div>
                </div>
                        <input wire:model="form.TxtPhoneNumber" name="TxtPhoneNumber" type="hidden" />

                        {{-- Delivery option --}}

                            <x-papiforms::input.group label="Delivery Options" for="DeliveryOptionID">
                            <livewire:delivery-option-select
                                :attrs="['class' => 'form-input block w-full px-4 py-3 border border-gray-300
                                        rounded-md placeholder-gray-500 focus:outline-none focus:shadow-outline-blue
                                        focus:border-blue-300 transition duration-150 ease-in-out']"
                               :availableDeliveryOptions="$this->form->availableDeliveryOptions"
                            />

                            {{-- Handle the error in the parent component's view --}}
                            @error('form.DeliveryOptionID')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </x-papiforms::input.group>
            </x-papiforms::input.section>

                    {{-- Password or PIN Section --}}
                    <x-papiforms::input.section section="PIN">
                        <x-papiforms::input.group label="Password" for="Password">
                            <x-papiforms::input.text wire:model="form.Password" id="Password" name="Password" type="password" placeholder="Create PIN (4-6 digit number)" value="{{ old('Password') }}"/>
                        </x-papiforms::input.group>
                         <x-papiforms::input.group label="Confirm PIN" for="Password2">
                            <x-papiforms::input.text wire:model="form.Password2" id="Password_confirmation" name="Password_confirmation" type="password" placeholder="Confirm PIN" value="{{ old('Password_confirmation') }}"/>
                        </x-papiforms::input.group>
                     </x-papiforms::input.section>

                    {{-- Hidden PatronCode Section --}}
                    <input wire:model="form.PatronCode" type="hidden" name="PatronCode" />

                    {{-- Submit Button --}}
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


                </form>
                {{-- End of Form --}}

            </div>
            {{-- End of Right Panel Content --}}

        </div>
        {{-- End of Right Panel --}}

    </div>
    {{-- End of Grid Layout --}}

</div>
