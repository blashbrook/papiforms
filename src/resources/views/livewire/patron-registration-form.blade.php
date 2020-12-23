
<div class="relative mt-8 bg-white">
    <div class="absolute inset-0">
        <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
    </div>
    <div class="relative mx-auto max-w-7xl lg:grid lg:grid-cols-5">
        <div class="px-4 py-16 bg-white sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
            <div class="max-w-lg mx-auto lg:max-w-none">
                <form  wire:submit.prevent="submitForm" action="patronpost" class="grid grid-cols-1 row-gap-6">
               @csrf
                    @if ($successMessage)
                        <div class="p-4 mt-8 rounded-md bg-green-50">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium leading-5 text-green-800">
                                        {{ $successMessage }}
                                    </p>
                                </div>
                                <div class="pl-3 ml-auto">
                                    <div class="-mx-1.5 -my-1.5">
                                        <button
                                            type="button"
                                            wire:click="$set('successMessage', null)"
                                            class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-green-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150"
                                            aria-label="Dismiss">
                                            <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                      clip-rule="evenodd" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                    <div>


                        <x-papiforms::input.group label="Birthdate" for="Birthdate">
                            <x-papiforms::input.datepicker wire:model.defer="Birthdate" id="Birthdate" name="Birthdate" type="text" placeholder="MM/DD/YYYY" value="{{ old('Birthdate') }}"/>
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="First name" for="NameFirst">
                            <x-papiforms::input.text wire:model.defer="NameFirst" id="NameFirst" name="NameFirst" type="text" placeholder="First name" value="{{ old('NameFirst') }}"/>
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="Middle name" for="NameMiddle">
                            <x-papiforms::input.text wire:model.defer="NameMiddle" id="NameMiddle" name="NameMiddle" type="text" placeholder="Middle name" value="{{ old('NameMiddle') }}"/>
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="Last name" for="NameLast">
                            <x-papiforms::input.text wire:model.defer="NameLast" id="NameLast" name="NameLast" type="text" placeholder="Last name" value="{{ old('NameLast') }}"/>
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="Street address" for="StreetOne">
                            <x-papiforms::input.text wire:model.defer="StreetOne" id="StreetOne" name="text" type="StreetOne" placeholder="Street address" value="{{ old('StreetOne') }}"/>
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="Apartment #" for="StreetTwo">
                            <x-papiforms::input.text wire:model.defer="StreetTwo" id="StreetTwo" name="text" type="StreetTwo" placeholder="Apt #" value="{{ old('StreetTwo') }}"/>
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="Postal code" for="PostalCode">
                            <livewire:select-postal-code />
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="Email" for="Email">
                            <x-papiforms::input.text wire:model.defer="Email" id="Email" name="Email" type="text" placeholder="Email address" value="{{ old('Email') }}"/>
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="Phone" for="PhoneVoice1">
                            <x-papiforms::input.text wire:model.defer="PhoneVoice1" id="PhoneVoice1" name="text" type="PhoneVoice1" placeholder="Phone number" value="{{ old('PhoneVoice1') }}"/>
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="Mobile phone carrier" for="MobilePhoneCarrier">
                            <livewire:select-mobile-phone-carrier />
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="School" for="School">
                            <livewire:select-udf-option />
                        </x-papiforms::input.group>

                        <x-papiforms::input.group label="Notification preference" for="DeliveryOption">
                            <livewire:select-delivery-option />
                        </x-papiforms::input.group>






                    <div class="">
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
        <div class="px-4 py-16 bg-gray-50 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
            <div class="max-w-lg mx-auto">
                <h2 class="text-2xl font-extrabold leading-8 tracking-tight text-gray-900 sm:text-3xl sm:leading-9">
                    Get in touch
                </h2>
                <p class="mt-3 text-lg leading-6 text-gray-500">
                    Nullam risus blandit ac aliquam justo ipsum. Quam mauris volutpat massa dictumst amet. Sapien tortor
                    lacus arcu.
                </p>
                <dl class="mt-8 text-base leading-6 text-gray-500">
                    <div>
                        <dt class="sr-only">Postal address</dt>
                        <dd>
                            <p>742 Evergreen Terrace</p>
                            <p>Springfield, OR 12345</p>
                        </dd>
                    </div>
                    <div class="mt-6">
                        <dt class="sr-only">Phone number</dt>
                        <dd class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            <span class="ml-3">
                                +1 (270) 684-0211
                            </span>
                        </dd>
                    </div>
                    <div class="mt-3">
                        <dt class="sr-only">Email</dt>
                        <dd class="flex">
                            <svg class="flex-shrink-0 w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            <span class="ml-3">
                                support@example.com
                            </span>
                        </dd>
                    </div>
                </dl>
                <p class="mt-6 text-base leading-6 text-gray-500">
                    Looking for careers?
                    <a href="#" class="font-medium text-gray-700 underline">View all job openings</a>.
                </p>
            </div>
        </div>

    </div>
</div>
